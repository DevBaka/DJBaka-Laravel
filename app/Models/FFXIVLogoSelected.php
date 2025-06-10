<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FFXIVLogoSelected extends Model
{
    protected $table = 'ffxiv_logo_selected';

    protected $fillable = [
        'logo_id',
    ];
}
