<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Matakuliah;


class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function labs()
    {
        return $this->hasMany(Lab::class, foreignKey: 'lab_id', localKey: 'lab_id');
    }
    public function matakuliahs()
    {
        return $this->hasMany(Matakuliah::class, 'lab_id', 'lab_id');
    }
}
