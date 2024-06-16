<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function Index(){
        if (Auth::user()->isAdmin=="true") {
            return redirect()->route('admin');
        }else {
            $publication=Publication::all()->reverse();
            return view('index',compact('publication'));
        }
        
    }
}
