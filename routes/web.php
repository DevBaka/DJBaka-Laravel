<?php

use App\Http\Controllers\backend\BackendController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\TwitchOverlayController;
use App\Http\Controllers\backend\TwitchChatCommandController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


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

    // Chat Commands
    Route::resource('backend/twitch/bot/commands', TwitchChatCommandController::class)
        ->names('chatbot.commands')
        ->only(['index', 'store', 'update', 'destroy']);
        
    // Chat View
    Route::prefix('backend/twitch/chat')->name('twitch.chat.')->group(function() {
        Route::get('/', [\App\Http\Controllers\Backend\TwitchChatController::class, 'index'])->name('index');
        Route::post('/store', [\App\Http\Controllers\Backend\TwitchChatController::class, 'store'])->name('store');
        Route::get('/messages', [\App\Http\Controllers\Backend\TwitchChatController::class, 'getMessages'])->name('messages');
    });


    Route::get('/overlay', [TwitchOverlayController::class, 'showLogo']);



});
// Database check route (temporary)
Route::get('/db-check', function () {
    try {
        // Check database connection
        DB::connection()->getPdo();
        
        // Get database name
        $dbName = DB::connection()->getDatabaseName();
        
        // Check if chat_messages table exists
        $tables = DB::select('SHOW TABLES');
        $tableNames = array_map('current', $tables);
        $hasChatTable = in_array('chat_messages', $tableNames);
        
        return [
            'status' => 'success',
            'database' => $dbName,
            'tables' => $tableNames,
            'has_chat_table' => $hasChatTable,
            'db_config' => [
                'connection' => config('database.default'),
                'host' => config('database.connections.mysql.host'),
                'port' => config('database.connections.mysql.port'),
                'database' => config('database.connections.mysql.database'),
                'username' => config('database.connections.mysql.username'),
            ]
        ];
    } catch (\Exception $e) {
        return [
            'status' => 'error',
            'message' => $e->getMessage(),
            'db_config' => [
                'connection' => config('database.default'),
                'host' => config('database.connections.mysql.host'),
                'port' => config('database.connections.mysql.port'),
                'database' => config('database.connections.mysql.database'),
                'username' => config('database.connections.mysql.username'),
            ]
        ];
    }
});

require __DIR__.'/auth.php';
require __DIR__.'/test-db.php';
