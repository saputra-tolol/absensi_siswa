<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
<<<<<<< Updated upstream
    protected $guarded = [];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
=======
    protected $guarded =[];
>>>>>>> Stashed changes
}
