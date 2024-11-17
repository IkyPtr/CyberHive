<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class identitas extends Model
{
    protected $fillable = [
        'nama',
        'foto',
        'umur',
        'no_hp',
        'motivasi'
    ];
}
