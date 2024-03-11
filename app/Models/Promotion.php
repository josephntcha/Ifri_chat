<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

       protected $fillable=[
        'annee'
       ];
    // public function users(){

    //     return $this->hasMany(User::class,'user_id','id');
    // }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
