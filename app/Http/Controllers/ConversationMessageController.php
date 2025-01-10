<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\User;
use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Models\MessageForIfri;
use function Pest\Laravel\json;
use Illuminate\Auth\AuthManager;

use Illuminate\Support\Facades\Auth;
use App\Repository\ConversationRepository;

class ConversationMessageController extends Controller
{
    /**
     * @var ConversationRepository;
     */
    private $r;
    /**
     * @var AuthManager;
     */
    private $auth;

    public function __construct(ConversationRepository $conversationRepository, AuthManager $auth)
    {
        $this->r = $conversationRepository;
        $this->auth = $auth;
    }

    

    public function ShowIfri()
    {
        $messages_ifri = MessageForIfri::Where('from_admin', '=', 'no')->get()->reverse();

        return view('message_ifri', compact('messages_ifri'));
    }

    public function MessageIfri(User $user, Request $request)
    {
        $user_admin = $user->where('isAdmin', true)->first();
 
        if ($request->hasFile('fichier')) {
            $fichier = $request->file('fichier');
            $filename = time() . '.' . $fichier->getClientOriginalExtension();
            $fichier->move('public/assets/clients/documents/', $filename);
        } else {
            $filename = '';
        }

        $this->r->CreateMessageForIfri($request->get('markdown'), $filename, $user->id, $user_admin->id);
        return response()->json(['message' => 'Message envoyé avec sucèss à l\'administration']);

    }

    public function MessageAnswer($id, Request $request)
    {
        if ($request->hasFile('fichier')) {
            $fichier = $request->file('fichier');
            $filename = time() . '.' . $fichier->getClientOriginalExtension();
            $fichier->move('public/assets/clients/documents/', $filename);
        } else {
            $filename = '';
        }

        $this->r->CreateMessageForIfriAnswer($request->get('markdown'), $filename, $id, Auth::user()->id);
        return response()->json(['message' => 'Reponse envoyée avec succès']);
    }

    public function MessageForMe(User $user)
    {
        $message_for_mes = MessageForIfri::where('to_id', $user->id)
            ->Where('from_admin', 'yes')
            ->get();

        return view('answer_for_student', compact('message_for_mes'));
    }

    public function DataPromotion($promotionId)
    {
        if ($promotionId == 'toute promotion') {
            $users = User::with('filiere')->get();
        } else {
            $users = User::with('filiere')->where('promotion_id', $promotionId)->get();
           
        }
        return response()->json($users)->header('Content-Type', 'application/json');
    }

    public function DataPromotionFiliere($promotionId, $filiereName)
    {
        if ($promotionId == 'toute promotion') {
            $users = User::with('filiere')->where('filiere_id', $filiereName); 
        } elseif ($filiereName == 'toute filiere') {
            $users = User::with('filiere')->where('promotion_id', $promotionId)->get();
        } else {
            $users = User::with('filiere')->where('promotion_id', $promotionId)->where('filiere_id', $filiereName)->get();
        }
        return response()->json($users);
    }

    public function Profile(User $user)
    {
        return view('profile', compact('user'));
    }

    public function ProfileDashboard(User $user)
    {
        
        return view('profileDashboard', compact('user'));
    }

    public function Info($id, Request $request)
    {
            $fichier = $request->file('fichier_cv');
            $filename = time() . '.' . $fichier->getClientOriginalExtension();
            $fichier->move('public/assets/clients/documents/', $filename);
           $update= User::Where('id', $id)->update([
                'description' => $request->input('description'),
                'poste' => $request->input('select_poste'),
                'cv' => $filename,
            ]);
            if($update){
                return response()->json(['message' => 'Information personnelle mise à jour']);
    
            }
    }

    public function Experience($id, Request $request)
    {
       $update= User::Where('id', $id)->update([
            'langage' => $request->input('langage'),
            'expérience' => $request->input('experience'),
            'entreprise' => $request->input('entreprise'),
            'besoin_emploi' => $request->input('besoin'),
        ]);
        if($update){
            return response()->json(['message' => 'Information personnelle mise à jour']);

        }
        return back();
    }
}
