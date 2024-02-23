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
Route::get('/statisque_promotion/{promotion}', [App\Http\Controllers\AdminController::class,'Statistique'])->name('statisque_promotion');
Route::get('/statisque_promotion_filiere/{promotion}/{filiere}', [App\Http\Controllers\AdminController::class,'StatistiqueFiliere'])->name('statisque_promotion_filiere');
Route::get('/reponse_admin/{user}', [App\Http\Controllers\AdminController::class,'reponseAdmin'])->name('reponse_ifri')->middleware('auth');
Route::post('/ajout_etudiant', [App\Http\Controllers\AdminController::class,'AjoutEtudiant'])->name('ajout_etudiant');

Route::get('/friends', [ConversationMessageController::class, 'friends'])->name('conversation.friend');
Route::get('/message_for_me/{user}', [ConversationMessageController::class, 'MessageForMe'])->name('message_for_me');

//route pour l'ajout d'une promotion /ajout-de-promotion
Route::post('/ajout-de-promotion', [App\Http\Controllers\AdminController::class,'AjoutPromotion']);
//route pour l'ajout d'une filière
Route::post('/ajout-de-filiere', [App\Http\Controllers\AdminController::class,'AjoutFiliere']);
Route::post('/modifier-filiere/{id}', [App\Http\Controllers\AdminController::class,'ModifierFiliere']);
Route::delete('/supprimer-filiere/{id}', [App\Http\Controllers\AdminController::class,'SupprimerFiliere']);



});

// end admin


//message que les étudiants envoient à l'administration

 Route::middleware('auth')->group(function(){
    Route::get('/message_ifri', [ConversationMessageController::class, 'ShowIfri'])->name('message_ifri');
   // Route::post('/send_message_to_ifri/{user}', [ConversationMessageController::class, 'MessageIfri'])->name('send_message_to_ifri');
    Route::get('/profile_compte/{user}', [ConversationMessageController::class, 'profile'])->name('profile_compte');
    Route::post('/send_message_to_ifri/{user}', [ConversationMessageController::class, 'MessageIfri'])->name('send_message_to_ifri');
    Route::post('/send_message_to_student/{user}', [ConversationMessageController::class, 'MessageAnswer'])->name('send_message_to_student');
    Route::get('/message_for_me/{user}', [ConversationMessageController::class, 'MessageForMe'])->name('message_for_me');
    Route::get('/action', [ConversationMessageController::class, 'Action'])->name('action');
    Route::get('/get-etu-promotion/{promotion}', [ConversationMessageController::class, 'DataPromotion'])->name('get-etu-promotion');
    Route::get('/get-etu-promotion-filiere/{promotion}/{filiere}', [ConversationMessageController::class, 'DataPromotionFiliere']);

    Route::get('/get-filieres/{promotion}', [ConversationMessageController::class, 'Promotion'])->name('action');
    Route::get('/get-users/{promotion}/{filiere}', [ConversationMessageController::class, 'ListePromoFiliere']);

    });

//end message to ifri
require __DIR__.'/auth.php';


Route::middleware('auth')->group(function (){

    Route::get('/chat',Index::class)->name('chat.index');
    Route::get('/chat/{query}',Chat::class)->name('chat');
    
    Route::get('/users',Users::class)->name('users');
});


