<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

   // Sesuaikan dengan nama tabel yang Anda buat

    protected $fillable = [
        'profile',
        'nama_siswa',
        'jenis_kelamin',
        'alamat',
        'no_telfone',
        'kelas_id',
    ];

    // Jika relasi diperlukan, tambahkan relasi di sini
}
