<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FFXIVLogos extends Model
{
    protected $table = 'ffxiv_logos';

    protected $fillable = [
        'file_name',
        'venue_name',
        'logo_path'
    ];
}
