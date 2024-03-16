<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $siswa = Siswa::all();
        // dd($siswa->all());
        return view('dashboard', compact('siswa'));
    }
}
