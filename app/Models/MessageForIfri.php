<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageForIfri extends Model
{
    use HasFactory;
    protected $fillable=[
        'content',
        'fichier',
        'from_id',
        'to_id',
        'from_admin',
        'read_at'
    
    ];

    public Function from(){
       return $this->belongsTo(User::class,'from_id');
    }
}
