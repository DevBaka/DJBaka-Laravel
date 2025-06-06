<?php

use App\Controller\IndexController;
use App\Livewire\Counter;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', function () {
    return view('welcome');
})->name('home');


//Route::get("/", [IndexController::class, "indexAction"])->name("index");
//Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
//Route::view('counter', 'livewire/counter')
//    ->name("counter");


/*
Route::get('/counter', function() {
    return view('counter');
});
*/

//Route::view('todos', 'livewire/todos')
//    ->name('todos');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
