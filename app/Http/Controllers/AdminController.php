<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Auth;
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



//Fonction qui contôle si l'utilisateur connecté est un administrateur afin de lui donne accès au dashboard admin
    public function admin(){
        if (Auth::user()->isAdmin=="true") {
           $users= User::all();
           $total_employes=User::Where('poste','Employé')->get();
           $total_stage=User::Where('poste','Stagiaire')->get();
           $total_sans_emploie=User::Where('poste','Sans emploi')->get();
          // dd($total_employes->count());
            return view('admin',compact('users','total_employes','total_stage','total_sans_emploie'));
        }else {
            dd("vous n'etes pas un administrateur");
        }
        
    }

    //fonction pour que l'administration reponde à un étudiant x ayant envoyé un message
    public function reponseAdmin(User $user){
        return view('reponse_ifri',compact('user'));
    }

    public function Promotion($promotion) {
        return view('promotion',compact('promotion'));

    }

//Fonction pour envoyer un message à toutes les promotions

    public function SendMessagePromotion($promotion, Request $request){
      if (Auth::user()->isAdmin=="true") {

         $etudiants= User::Where('promotion',$promotion)->get();
         $user_admin=User::Where('isAdmin',true)->first();
         $request->validate([
            'fichier' => 'required|mimes:pdf|max:10240', // PDF, max 10MB
             ]);
             if($request->hasFile('fichier')){
                $image = $request->file('fichier');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $image->move('public/asset/clients/documents/',$filename);
            }
            
         for ($i=0; $i < $etudiants->count() ; $i++) {
            
          $this->r->CreateMessageForIfriAnswer($request->get('markdown'),$filename,$etudiants[$i]->id,$user_admin->id);
         }
        }else {
          dd("une erreur s'est produite");
        }
       session()->flash('success', 'Message avec sucèss à la promotion'.$promotion);
       return back();
    }

    //fonction pour avoir les statistiques liées aux élèves
    public function Statistique($promotion) {
        $effectif_promotion=User::Where('promotion',$promotion)->get();
        $users= User::all();
           $total_employes=User::Where('poste','Employé')->Where('promotion',$promotion)->get();
           $total_stage=User::Where('poste','Stagiaire')->Where('promotion',$promotion)->get();
           $total_sans_emploie=User::Where('poste','Sans emploi')->Where('promotion',$promotion)->get();
           
        return view('admin',compact('users','effectif_promotion','total_employes','total_stage','total_sans_emploie'));
         
    }
}
