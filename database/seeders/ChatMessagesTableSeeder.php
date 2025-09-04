<?php

namespace Database\Seeders;

use App\Models\ChatMessage;
use Illuminate\Database\Seeder;

class ChatMessagesTableSeeder extends Seeder
{
    public function run()
    {
        // Create some test messages
        $messages = [
            [
                'username' => 'TestUser1',
                'channel' => 'testchannel',
                'message' => 'This is a test message',
                'tags' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'TestUser2',
                'channel' => 'testchannel',
                'message' => 'Another test message',
                'tags' => null,
                'created_at' => now()->subMinutes(5),
                'updated_at' => now()->subMinutes(5)
            ]
        ];

        foreach ($messages as $message) {
            ChatMessage::create($message);
        }
    }
}
