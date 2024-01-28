<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\MessageForIfri;
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

    public function __construct(ConversationRepository $conversationRepository,AuthManager $auth){
        $this->r=$conversationRepository;
        $this->auth=$auth;
     }

    public function ShowIfri(){
        $messages_ifri=MessageForIfri::all();
 
        return view('message_ifri',compact('messages_ifri'));
 
     }

     public function MessageIfri(User $user, Request $request){
        $user_admin=$user->where('isAdmin',true)->first();
        $request->validate([
         'fichier' => 'required|mimes:pdf|max:10240', // PDF, max 10MB
          ]);
         // $path = $request->file('fichier')->store('pdfs');
          if($request->hasFile('fichier')){
             $image = $request->file('fichier');
             $filename = time().'.'.$image->getClientOriginalExtension();
             $image->move('public/assets/clients/documents/',$filename);
         }
 
         
       $this->r->CreateMessageForIfri($request->get('markdown'),$filename,$user->id,$user_admin->id);
       session()->flash('success', 'Message avec sucèss');
       return back();
       //return view('message_to_ifri');
     }

     public function MessageAnswer(User $user, Request $request) {

      $image = $request->file('fichier');
       $filename = time().'.'.$image->getClientOriginalExtension();
       
       
      $this->r->CreateMessageForIfriAnswer($request->get('markdown'),$filename,$user->id, Auth::user()->id);
      session()->flash('success', 'Reponse envoyée');
      return back();
    }

    public function MessageForMe(User $user) {
        
      $message_for_mes= MessageForIfri::where('to_id',$user->id)->Where('from_admin','yes')->get();
      
      return view('answer_for_student',compact('message_for_mes'));
  }

}
