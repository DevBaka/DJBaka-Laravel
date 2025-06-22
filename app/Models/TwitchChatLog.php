<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TwitchChatLog extends Model
{
    protected $fillable = [
        'username',
        'message',
    ];
}
