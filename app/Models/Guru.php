<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $guarded = [];
<<<<<<< Updated upstream

    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'guru_id');
    }
=======
    
>>>>>>> Stashed changes
}
