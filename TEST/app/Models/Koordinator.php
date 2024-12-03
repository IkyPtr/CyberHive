<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koordinator extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function labs()
    {
        return $this->hasMany(Lab::class, 'id_ko', 'id_ko');
    }
}
