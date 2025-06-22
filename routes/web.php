<?php

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\TwitchOverlayController;
use App\Http\Controllers\backend\TwitchChatCommandController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [FrontendController::class, 'homepage'])->name('home');
Route::get('/djbaka/twitch_overlays/test', [TwitchOverlayController::class, 'test'])->name('twitch.overlays.test');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('backend.pages.home');
    })->middleware(['verified'])->name('dashboard');


    Route::get('/backend/logout', [BackendController::class, 'AdminLogout'])->name('backend.logout');
    Route::get('/backend/edit-profile', [BackendController::class, 'AdminEditProfile'])->name('backend.edit.profile');
    Route::post('/backend/update-profile', [BackendController::class, 'AdminUpdateProfile'])->name('backend.update.profile');
    Route::get('/backend/change-password', [BackendController::class, 'AdminChangePassword'])->name('backend.change.password');
    Route::post('/backend/update-password', [BackendController::class, 'AdminUpdatePassword'])->name('backend.update.password');


    Route::get('/backend/twitch/overlay/ffxiv-logo-edit', [TwitchOverlayController::class, 'editLogo'])->name('twitch.overlay.ffxiv.logo.edit');
    Route::post('/backend/twitch/overlay/ffxiv-logo-upload', [TwitchOverlayController::class, 'uploadLogo'])->name('twitch.overlay.ffxiv.logo.upload');
    Route::patch('/backend/twitch/overlay/ffxiv-logo-update', [TwitchOverlayController::class, 'updateLogo'])->name('twitch.overlay.ffxiv.logo.update');


    //Route::get('/backend/twitch/bot/commands', [TwitchChatCommandController::class, 'index'])->name('commands.index');
    //Route::get('/backend/twitch/bot/commands/create', [TwitchChatCommandController::class, 'create'])->name('commands.create');
    //Route::post('/backend/twitch/bot/commands', [TwitchChatCommandController::class, 'store'])->name('commands.store');
    //Route::delete('/backend/twitch/bot/commands/{id}', [TwitchChatCommandController::class, 'destroy'])->name('commands.destroy');


    Route::resource('backend/twitch/bot/commands', TwitchChatCommandController::class)
    ->names('chatbot.commands')
    ->only(['index', 'store', 'update', 'destroy']);

    // Admin-Bereich
    //Route::resource('backend/twitch/bot/commands', TwitchChatCommandController::class)
    //    ->names('admin.commands')
    //    ->only(['index', 'store', 'destroy']);

    // API-Bereich
    //Route::resource('chatbot/commands', TwitchChatCommandController::class)
    //    ->names('chatbot.commands')
    //    ->only(['index', 'store', 'update', 'destroy']);


    Route::get('/overlay', [TwitchOverlayController::class, 'showLogo']);

    //Route::get('/profile/logo', [ProfileController::class, 'editLogo'])->name('overlay.logo.edit');
   // Route::patch('/profile/logo', [ProfileController::class, 'updateLogo'])->name('overlay.logo.update');

    


});





/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
