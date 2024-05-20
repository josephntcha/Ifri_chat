<?php

namespace App\Http\Controllers;

use Rules\Password;
use App\Models\User;
use App\Models\Filiere;
use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Models\MessageForIfri;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\EnvoieMailPasswordForAlumni;
use App\Repository\ConversationRepository;

class AdminController extends Controller
{

 
       /** 
     * @var ConversationRepository;
     */
   private $r;
   /** 
    * @var AuthManager;
    */
   private $auth;

   public function __construct(ConversationRepository $conversationRepository,AuthManager $auth){
       $this->r=$conversationRepository;
       $this->auth=$auth;
    }



    public function admin(){
        if (Auth::user()->isAdmin=="true") {
          
         $promotions=Promotion::all();
         $filieres=Filiere::all();
            return view('admin',compact('promotions','filieres'));
        }else {
            dd("vous n'etes pas un administrateur");
        }
        
    }

    public function Action(){
        $promotions=Promotion::all();
        $filieres=Filiere::all();
        return view('action', compact('promotions','filieres'));
      }

    public function reponseAdmin(User $user){
        $id_user=Auth::user()->id;
        $content=MessageForIfri::Where('to_id',$id_user)->Where('from_id',$user->id)
        ->get();
        return view('reponse_ifri',compact('user','content'));
    }

    public function Promotion(Request $request) {
        $promotion=$request->input('promotion_message');
        $filiere=$request->input('filiere_message');
        $annee=Promotion::findOrfail($promotion)->annee;
        $nom_filiere=Filiere::findOrfail($filiere)->filiere;
       //dd($annee,$nom_filiere);
           
        return view('promotion',compact('promotion','filiere','annee','nom_filiere'));
    }


    public function SendMessagePromotion($promotion,$filiere, Request $request){
       
      if (Auth::user()->isAdmin=="true") {

        // $promotion_find= Promotion::Where('id',$promotion)->get();
       //  $etudiants=$promotion_find->users;
        if ($promotion && $filiere) {
            $etudiants=User::where('promotion_id',$promotion)->where('filiere_id',$filiere)->get();
        }elseif(!$promotion && $filiere){
            $etudiants=User::where('filiere_id',$filiere)->get();
        }elseif ($promotion && !$filiere) {
            $etudiants=User::where('promotion_id',$promotion)->get();  
        }elseif (!$promotion && !$filiere) {
            return response()->json(['message'=>'Veuillez choisir une promtion ou une filière']);
        }
         $user_admin=Auth::user()->id;

         $request->validate([
            'fichier' => 'required|mimes:pdf|max:10240', // PDF, max 10MB
             ]);

             if($request->hasFile('fichier')){
                $fichier = $request->file('fichier');
                $filename = time().'.'.$fichier->getClientOriginalExtension();
                $fichier->move('public/asset/clients/documents/',$filename);
            }
            
         for ($i=0; $i < $etudiants->count() ; $i++) {
            
          $this->r->CreateMessageForIfriAnswer($request->get('markdown'),$filename,$etudiants[$i]->id,$user_admin);
         }
        }else {
          dd("une erreur s'est produite");
        }
       session()->flash('success', 'Message avec sucèss à la promotion'.$promotion);
       return back();
    }

    public function Statistique($promotionId) {

        if ($promotionId=="toute promotion") {
            $users=User::all();
            $users_emploi = User::where('poste', 'employé')->get();
            $users_stage = User::where('poste', 'Stagiaire')->get();
            $users_sans = User::where('poste', 'Sans emploi')->get();
            $responseData = [
                'users' => $users,
                'users_emploi' => $users_emploi,
                'users_stage' => $users_stage,
                'users_sans' => $users_sans,
            ];

          }else {
            $promotion_users = Promotion::with('users')->where('annee', $promotionId)->first();
             $users=$promotion_users->users;

            $users_emploi = $promotion_users->users()->where('poste', 'Employé')->get();
            $users_stage = $promotion_users->users()->where('poste', 'Stagiaire')->get();
            $users_sans = $promotion_users->users()->where('poste', 'Sans emploi')->get();

            $responseData = [
                'users' => $users,
                'users_emploi' => $users_emploi,
                'users_stage' => $users_stage,
                'users_sans' => $users_sans,
            ];
      
          }

     return response()->json($responseData)->header('Content-Type', 'application/json');

         
    }

    public function StatistiqueFiliere($promotionId, $filiere){

         if ($filiere=="toute filiere") {
            return redirect()->route('statisque_promotion',$promotionId);
         }
        if ($promotionId=="toute promotion") {

            $users_filiere = Filiere::with('users')->where('filiere', $filiere)->first();
            $users=$users_filiere->users;
            $users_emploi = $users_filiere->users()->where('poste', 'employé')->get();
            $users_stage =  $users_filiere->users()->where('poste', 'Stagiaire')->get();
            $users_sans =   $users_filiere->users()->where('poste', 'Sans emploi')->get();

            $responseData = [
                'users' => $users,
                'users_emploi' => $users_emploi,
                'users_stage' => $users_stage,
                'users_sans' => $users_sans,
            ];
          }else {

            $promotion = Promotion::with('users')->where('annee', $promotionId)->first();
            $filiere = Filiere::Where('filiere',$filiere)->first();
            $users = $promotion->users()->where('filiere_id', $filiere->id)->get();

            $users_emploi =$promotion->users()->where('filiere_id', $filiere->id)->where('poste', 'Employé')->get();
            $users_stage =$promotion->users()->where('filiere_id', $filiere->id)->where('poste', 'Stagiaire')->get();
            $users_sans =$promotion->users()->where('filiere_id', $filiere->id)->where('poste', 'Sans emploi')->get();

            $responseData = [
                'users' => $users,
                'users_emploi' => $users_emploi,
                'users_stage' => $users_stage,
                'users_sans' => $users_sans,
                
            ];
          }

          return response()->json($responseData)->header('Content-Type', 'application/json');

    }

 
      public function AjoutPromotion(Request $request){
        $promotion_existe=Promotion::Where('annee',$request->input('promotion'))->first();
        if (!$promotion_existe) {
            $promotion = new Promotion();
            $promotion->annee = $request->input('promotion');
            $promotion->save();
           
            $message="Promotion ajoutée avec succès";
        }else{
            $message="La promotion existe déjà";

        }
        return response()->json(['success' => true, 'message' => $message]);
      }

   public function AjoutFiliere(Request $request){
    $filiere_existe=Filiere::Where('filiere',$request->input('filiere'))->first();
    if (!$filiere_existe) {
        $filiere = new Filiere();
        $filiere->filiere = $request->input('filiere');
        $filiere->save();
       
        $message="filiere ajoutée avec succès";
    }else{
        $message="La filiere existe déjà";

    }
    return response()->json(['success' => true, 'message' => $message]);
  }

  public function ModifierFiliere($filiereId , Request $request){
   
       
       try {
        $filiere = Filiere::findOrFail($filiereId);
        $new_filiere=$request->input('filiere');
        if (!$new_filiere) {
            return response()->json(['success' => false, 'message' => 'Le champ filiere ne peut pas être vide.']);
        }
       $modifier=$filiere->update(['filiere'=>$new_filiere]);
       if ($modifier) {
        return response()->json(['success' => true, 'message' => 'La filière a été modifiée avec succès.']);
       }
        
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Erreur lors de la modification de la filière.'.$e->getMessage()]);
    }

  }


  public function SupprimerFiliere($id)  {
    $filiere = Filiere::findOrFail($id);
    try {
        $delete=$filiere->delete();
        if (!$delete) {
            return response()->json(['success' => false, 'message' => 'La filiere n\'a été supprimée']);
        }else {
            return response()->json(['success' => true, 'message' => 'La filière a été supprimée avec succès.']);

        }
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Erreur lors de la modification de la filière.'.$e->getMessage()]);
    }
  }


  public function SupprimerPromotion($id)  {
    $promotion = Promotion::findOrFail($id);
    try {
        $delete=$promotion->delete();
        if (!$delete) {
            return response()->json(['success' => false, 'message' => 'La promotion n\'a été supprimée']);
        }else {
            return response()->json(['success' => true, 'message' => 'La promotion a été supprimée avec succès.']);

        }
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Erreur lors de la modification de la promotion.'.$e->getMessage()]);
    }
  }
  

  public function ModifierPromotion($promotionId , Request $request){
    try {
     $promotion = Promotion::findOrFail($promotionId);
     $new_promotion=$request->input('promotion');
     if (!$new_promotion) {
         return response()->json(['success' => false, 'message' => 'Le champ promotion ne peut pas être vide.']);
     }
    $modifier=$promotion->update(['annee'=>$new_promotion]);
    if ($modifier) {
     return response()->json(['success' => true, 'message' => 'La promotion a été modifiée avec succès.']);
    }
     
 } catch (\Exception $e) {
     return response()->json(['success' => false, 'message' => 'Erreur lors de la modification de la promotion.'.$e->getMessage()]);
 }

}

public function AjoutAlumni(Request $request){
   
    $alumni_existe=User::Where('matricule',$request->input('matricule'))->first();
    $password_default='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';//password
    if (!$alumni_existe) {
     $user=User::create([
            'name'=> $request->nom,
            'email'=> $request->email,
            'matricule'=> $request->matricule,
            'promotion_id'=> $request->promotion,
            'filiere_id'=> $request->filiere,
            'password'=> $password_default,

        ]);
      
        if ($user) {
            $message="Alumnus ajouté avec succès";
        }
    }else{
        $message="Alumnus existe déjà";

    }
    return response()->json(['success' => true, 'message' => $message,'alumni_existe'=>$alumni_existe]);
  }


}
