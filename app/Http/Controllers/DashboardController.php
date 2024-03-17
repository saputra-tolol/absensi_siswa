<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        // dd($siswa->all());
        return view('dashboard');
    }
}
