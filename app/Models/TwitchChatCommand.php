<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TwitchChatCommand extends Model
{
    protected $fillable = [
        'command',
        'response',
    ];
}
