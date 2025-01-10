<?php

use App\Http\Livewire\Users;
use App\Http\Livewire\Chat\Chat;
use App\Http\Livewire\Chat\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConversationMessageController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/message_to_ifri', function () {
    return view('message_to_ifri');
})->name('message_to_ifri');

Route::get('/publication', function () {
    return view('publication');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 
        Route::get('/index', [IndexController::class, 'Index'])->name('index');
    
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
    Route::post('/faire_publication', [App\Http\Controllers\AdminController::class, 'Publication']);
    Route::get('/user_cv', [App\Http\Controllers\AdminController::class, 'CV'])->name('user_cv');
    Route::get('/entretien', [App\Http\Controllers\AdminController::class, 'Entretien']);
    Route::post('/stage_emploi_contact', [App\Http\Controllers\AdminController::class, 'Contact']);
    Route::post('/message_to_promotion', [App\Http\Controllers\AdminController::class, 'Promotion'])->name('/message_to_promotion');
    Route::post('/admin_send_message_promotion', [App\Http\Controllers\AdminController::class, 'SendMessagePromotion']);
    Route::get('/statisque_promotion/{promotion}', [App\Http\Controllers\AdminController::class, 'Statistique'])->name('statisque_promotion');
    Route::get('/statisque_promotion_filiere/{promotion}/{filiere}', [App\Http\Controllers\AdminController::class, 'StatistiqueFiliere'])->name('statisque_promotion_filiere');
    Route::get('/reponse_admin/{user}', [App\Http\Controllers\AdminController::class, 'reponseAdmin'])
        ->name('reponse_ifri')
        ->middleware('auth');

    Route::get('/friends', [ConversationMessageController::class, 'friends'])->name('conversation.friend');
    Route::get('/message_for_me/{user}', [ConversationMessageController::class, 'MessageForMe'])->name('message_for_me');

    Route::post('/ajout-de-promotion', [App\Http\Controllers\AdminController::class, 'AjoutPromotion']);
    Route::post('/ajout_alumni', [App\Http\Controllers\AdminController::class, 'AjoutAlumni']);
    Route::post('/ajout-de-filiere', [App\Http\Controllers\AdminController::class, 'AjoutFiliere']);
    Route::post('/modifier-filiere/{id}', [App\Http\Controllers\AdminController::class, 'ModifierFiliere']);
    Route::post('/modifier-promotion/{id}', [App\Http\Controllers\AdminController::class, 'ModifierPromotion']);
    Route::delete('/supprimer-filiere/{id}', [App\Http\Controllers\AdminController::class, 'SupprimerFiliere']);
    Route::delete('/supprimer-promotion/{id}', [App\Http\Controllers\AdminController::class, 'SupprimerPromotion']);
    Route::get('/action', [App\Http\Controllers\AdminController::class, 'Action'])->name('action');
});

Route::middleware('auth')->group(function () {
    Route::post('/information_personnelles/{id}', [ConversationMessageController::class, 'Info'])->name('information_personnelles');
    Route::post('/experiences/{user}', [ConversationMessageController::class, 'Experience'])->name('experience');

    Route::get('/message_ifri', [ConversationMessageController::class, 'ShowIfri'])->name('message_ifri');
    Route::get('/profile_compte/{user}', [ConversationMessageController::class, 'profile'])->name('profile_compte');
    Route::get('/profile_dashboard/{user}', [ConversationMessageController::class, 'profileDashboard'])->name('profile_dashboard');
    Route::post('/send_message_to_ifri/{user}', [ConversationMessageController::class, 'MessageIfri'])->name('send_message_to_ifri');
    Route::post('/send_message_to_student/{id}', [ConversationMessageController::class, 'MessageAnswer'])->name('send_message_to_student');
    Route::get('/get-etu-promotion/{promotion}', [ConversationMessageController::class, 'DataPromotion'])->name('get-etu-promotion');
    Route::get('/get-etu-promotion-filiere/{promotion}/{filiere}', [ConversationMessageController::class, 'DataPromotionFiliere']);

    Route::get('/get-filieres/{promotion}', [ConversationMessageController::class, 'Promotion'])->name('action');
    Route::get('/get-users/{promotion}/{filiere}', [ConversationMessageController::class, 'ListePromoFiliere']);
});

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/chat', Index::class)->name('chat.index');
    Route::get('/chat/{query}', Chat::class)->name('chat');

    Route::get('/users', Users::class)->name('users');
});
