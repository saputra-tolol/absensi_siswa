<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard() {
        // Ambil tanggal sekarang
        $now = Carbon::now();

        // Hitung jumlah hari dalam bulan ini
        $totalDaysInMonth = $now->daysInMonth;

        // Data tanggal untuk dikirimkan ke view
        $data['totalDaysInMonth'] = $totalDaysInMonth;

          // Ambil bulan saat ini
          $bulanIni = Carbon::now()->translateFormat('F');

          // Data bulan untuk dikirimkan ke view
          $data['bulanIni'] = $bulanIni;

        return view('dashboard', $data);
    }

    public function absensi() {
        return view('absensi');
    }

}
