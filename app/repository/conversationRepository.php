<?php
namespace App\Repository;
use App\Models\User;
use App\Models\MessageTest;
use App\Models\MessageForIfri;
use Illuminate\Support\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;

class ConversationRepository{

    private $user;
    private $messagetest;
    private $messageforifri;

    public function __construct(User $user,MessageTest $message,MessageForIfri $messageforifri){
       $this->user=$user;
       $this->messagetest=$message;
       $this->messageforifri=$messageforifri;
    }

    public function getConversations(int $userId){
       $conversations= $this->user->newQuery()
        ->select('name','id')
        ->Where('id','!=',$userId)
        ->get();
        $unread= $this->unreadcount($userId);
        foreach ($conversations as  $conversation) {
              if (isset($unread[$conversation->id])) {
               $conversation->unread=$unread[$conversation->id];
              }else {
               $conversation->unread=0;
              }
        }

        return $conversations;
    }
    public function CreateMessage(String $content,int $from, int $to){
       return $this->messagetest->newQuery()->create([
         'content'=>$content,
         'from_id'=>$from,
         'to_id'=>$to
       ]);
    }
    public function CreateMessageForIfriAnswer(String $content,String $fichier,int $to,int $from){
      return $this->messageforifri->newQuery()->create([
        'content'=>$content,
        'fichier'=>$fichier,
        'from_id'=>$from,
        'from_admin'=>'yes',
        'to_id'=>$to
      ]);
   }

   public function CreateMessageForIfri(String $content,String $fichier,int $to,int $from){
   //dd($fichier);
    return $this->messageforifri->newQuery()->create([
      'content'=>$content,
      'fichier'=>$fichier,
      'from_id'=>$to,
      'to_id'=>$from
    ]);
 }

    public function getMessageFor(int $from,int $to):Builder{
      return $this->messagetest->newQuery()->WhereRaw("((from_id=$from AND to_id=$to)OR(from_id=$to AND to_id=$from))")->orderBy('created_at','DESC');
    }

    public function unreadcount(int $userId){
             return $this->messagetest->newQuery()
             ->Where('to_id',$userId)->groupBy('from_id')
             ->selectRaw('from_id,COUNT(id) as count')
             ->WhereRaw('read_at IS NULL')
             ->get()
             ->pluck('count','from_id');
    }

    public function readAllFrom(int $from, int $to){
        $this->messagetest->where('from_id',$from )->where('to_id',$to )->update(['read_at'=>Carbon::now()]);
    }
}