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

<<<<<<< Updated upstream
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
=======
    /**
     * Get the kelas that owns the Siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class,);
    }

>>>>>>> Stashed changes
    // Jika relasi diperlukan, tambahkan relasi di sini
}
