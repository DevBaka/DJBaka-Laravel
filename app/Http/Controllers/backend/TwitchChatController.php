<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Models\ChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TwitchChatController extends Controller
{
    public function index()
    {
        $messages = ChatMessage::latest()->paginate(50);
        return view('backend.twitch.chat.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'channel' => 'required|string|max:255',
            'message' => 'required|string',
            'tags' => 'nullable|array'
        ]);

        $message = ChatMessage::create($validated);
        
        return response()->json($message);
    }

    public function getMessages()
    {
        try {
            $messages = ChatMessage::select([
                'id',
                'username',
                'message',
                'created_at',
                DB::raw("DATE_FORMAT(created_at, '%H:%i:%s') as time")
            ])
            ->orderBy('created_at', 'desc')
            ->take(50)
            ->get()
            ->reverse()
            ->values();

            Log::info('Fetched ' . $messages->count() . ' messages');

            return response()->json([
                'status' => 'success',
                'data' => $messages,
                'message' => 'Messages retrieved successfully'
            ]);

        } catch (\Exception $e) {
            Log::error('Error fetching messages: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve messages: ' . $e->getMessage()
            ], 500);
        }
    }
}
