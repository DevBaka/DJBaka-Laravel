<?php

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('backend.pages.home');
    })->middleware(['verified'])->name('dashboard');


    Route::get('/backend/logout', [BackendController::class, 'AdminLogout'])->name('backend.logout');
    Route::get('/backend/edit-profile', [BackendController::class, 'AdminEditProfile'])->name('backend.edit.profile');


});





/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
