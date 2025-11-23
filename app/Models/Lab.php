<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'mk_id', 'mk_id');
    }

    public function koordinator()
    {
        return $this->belongsTo(Koordinator::class, 'id_ko', 'id_ko');
    }

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_ps', 'id_ps');
    }
}

