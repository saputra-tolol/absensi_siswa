<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }


    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
