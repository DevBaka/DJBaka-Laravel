<?php

use App\Controller\IndexController;
use App\Livewire\Counter;
use App\Livewire\Events;
use App\Livewire\Todos;
//use App\Livewire\Events;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/counter', Counter::class)
->middleware(['auth', 'verified']) // Seite wird nur angezeigt, wenn man eingeloggt ist
->name('counter');

Route::get('/events', Events::class)
->name('events');


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
