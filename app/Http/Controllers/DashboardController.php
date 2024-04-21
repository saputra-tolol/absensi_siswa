<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        // Ambil data kelas
        $kelas = Kelas::all();

        // Ambil kelas yang dipilih dari query string jika ada
        $selectedKelasId = $request->query('kelas_id');

        // Jika ada kelas yang dipilih, ambil siswa dari kelas tersebut
        if ($selectedKelasId) {
            $kelasFilter = Kelas::find($selectedKelasId);
            if (!$kelasFilter) {
                // Jika kelas tidak ditemukan, tampilkan pesan error dan kembali ke halaman sebelumnya
                return redirect()->back()->with('error', 'Kelas tidak ditemukan.');
            }
            $siswas = $kelasFilter->siswa;
        } else {
            // Jika tidak ada kelas yang dipilih, ambil semua siswa dari semua kelas
            $siswas = Siswa::all();
        }

        // Sisanya tetap sama seperti sebelumnya
        $now = Carbon::now();
        $totalDaysInMonth = $now->daysInMonth;
        $bulanIni = $now->translatedFormat('F');
        $tahunIni = $now->year;

        $data = [
            'siswas' => $siswas,
            'kelas' => $kelas,
            'totalDaysInMonth' => $totalDaysInMonth,
            'bulanIni' => $bulanIni,
            'tahunIni' => $tahunIni,
            'now' => $now,
            'selectedKelasId' => $selectedKelasId, // Pass the selected class ID to the view
        ];

        return view('dashboard', $data);
    }


}
