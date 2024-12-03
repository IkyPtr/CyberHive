<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_ps',
        'nama_ps',
        'nim_nip',
        'kelas',
    ];
    public function labs()
    {
        return $this->hasMany(Lab::class, 'id_ps', 'id_ps');
    }
}
