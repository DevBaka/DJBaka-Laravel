<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PDO;
use PDOException;

class CheckDbConnection extends Command
{
    protected $signature = 'db:check';
    protected $description = 'Check database connection and display current settings';

    public function handle()
    {
        $this->info('Checking database connection...');
        
        try {
            // Get database configuration
            $connection = config('database.default');
            $config = config("database.connections.{$connection}");
            
            $this->info("Using connection: {$connection}");
            $this->line("Host: {$config['host']}");
            $this->line("Port: {$config['port']}");
            $this->line("Database: {$config['database']}");
            $this->line("Username: {$config['username']}");
            
            // Try to connect
            $pdo = new PDO(
                "mysql:host={$config['host']};port={$config['port']};dbname={$config['database']}",
                $config['username'],
                $config['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
            
            $this->info("✅ Successfully connected to the database!");
            
            // Check if chat_messages table exists
            $tables = DB::select('SHOW TABLES LIKE "chat_messages"');
            if (count($tables) > 0) {
                $this->info("✅ chat_messages table exists");
                $count = DB::table('chat_messages')->count();
                $this->info("📊 Number of messages in chat_messages table: {$count}");
            } else {
                $this->warn("❌ chat_messages table does not exist");
            }
            
            return 0;
            
        } catch (\Exception $e) {
            $this->error("❌ Could not connect to the database. Please check your configuration.");
            $this->error("Error: " . $e->getMessage());
            return 1;
        }
    }
}
