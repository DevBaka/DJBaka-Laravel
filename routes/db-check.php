<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
