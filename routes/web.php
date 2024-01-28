<?php

use App\Http\Livewire\Users;
use App\Http\Livewire\Chat\Chat;
use App\Http\Livewire\Chat\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConversationMessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/message_to_ifri', function () {
    return view('message_to_ifri');
})->name('message_to_ifri');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/index', [IndexController::class, 'Index'])->name('index');
});



//add admin
Route::middleware('auth')->group(function(){
Route::get('/admin', [App\Http\Controllers\AdminController::class,'admin'])->name('admin');
Route::get('/admin_promotion/{promotion}', [App\Http\Controllers\AdminController::class,'Promotion'])->name('message_to_promotion')->middleware('auth');
Route::post('/admin_send_message_promotion/{promotion}', [App\Http\Controllers\AdminController::class,'SendMessagePromotion'])->name('send_message_to_promotion')->middleware('auth');
Route::get('/statisque_promotion/{promotion}', [App\Http\Controllers\AdminController::class,'Statistique'])->name('statistique_to_promotion')->middleware('auth');
Route::get('/reponse_admin/{user}', [App\Http\Controllers\AdminController::class,'reponseAdmin'])->name('reponse_ifri')->middleware('auth');
Route::get('/statisque_promotion/{promotion}', [App\Http\Controllers\AdminController::class,'Statistique'])->name('statistique_to_promotion');

Route::get('/friends', [ConversationMessageController::class, 'friends'])->name('conversation.friend');
Route::get('/message_for_me/{user}', [ConversationMessageController::class, 'MessageForMe'])->name('message_for_me');


});

// end admin


//message que les étudiants envoient à l'administration

 Route::middleware('auth')->group(function(){
    Route::get('/message_ifri', [ConversationMessageController::class, 'ShowIfri'])->name('message_ifri');
    Route::post('/send_message_to_ifri/{user}', [ConversationMessageController::class, 'MessageIfri'])->name('send_message_to_ifri');
    Route::get('/profile_compte/{user}', [ConversationMessageController::class, 'profile'])->name('profile_compte');
    Route::post('/send_message_to_ifri/{user}', [ConversationMessageController::class, 'MessageIfri'])->name('send_message_to_ifri');
    Route::post('/send_message_to_student/{user}', [ConversationMessageController::class, 'MessageAnswer'])->name('send_message_to_student');
    Route::get('/message_for_me/{user}', [ConversationMessageController::class, 'MessageForMe'])->name('message_for_me');

    });

//end message to ifri
require __DIR__.'/auth.php';


Route::middleware('auth')->group(function (){

    Route::get('/chat',Index::class)->name('chat.index');
    Route::get('/chat/{query}',Chat::class)->name('chat');
    
    Route::get('/users',Users::class)->name('users');
});


