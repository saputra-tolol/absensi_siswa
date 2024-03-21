<?php

namespace App\Http\Controllers;

use App\Models\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa() {
        $siswa = Siswa::all();
        return view('siswa', compact('siswa'));
    }
}
