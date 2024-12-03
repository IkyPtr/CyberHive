<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function labs()
    {
        return $this->hasMany(Lab::class, 'mk_id', 'mk_id');
    }
}
