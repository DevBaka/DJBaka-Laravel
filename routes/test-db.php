<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/test-db', function () {
    try {
        // Test database connection
        DB::connection()->getPdo();
        
        // Check if chat_messages table exists
        $tableExists = DB::getSchemaBuilder()->hasTable('chat_messages');
        
        if ($tableExists) {
            $count = DB::table('chat_messages')->count();
            $columns = DB::getSchemaBuilder()->getColumnListing('chat_messages');
            
            return [
                'status' => 'success',
                'message' => 'Database connection successful',
                'table_exists' => true,
                'row_count' => $count,
                'columns' => $columns,
                'sample_data' => DB::table('chat_messages')->latest()->take(5)->get()
            ];
        } else {
            return [
                'status' => 'error',
                'message' => 'chat_messages table does not exist',
                'tables' => DB::select('SHOW TABLES')
            ];
        }
    } catch (\Exception $e) {
        return [
            'status' => 'error',
            'message' => $e->getMessage(),
            'connection' => config('database.default'),
            'database' => config('database.connections.'.config('database.default'))
        ];
    }
});
