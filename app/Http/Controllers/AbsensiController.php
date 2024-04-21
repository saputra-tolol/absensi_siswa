<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Absensi;
use App\Models\Kelas;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AbsensiController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('absensi.absensi', compact('kelas'));
    }

    public function view_absensi($kelas_id)
    {
        // Ambil kelas berdasarkan ID yang diberikan
        $kelas = Kelas::findOrFail($kelas_id);

        // Ambil semua siswa yang terkait dengan kelas tersebut
        $siswas = $kelas->siswas;
        // Ambil tanggal sekarang
        $now = Carbon::now();

        // Hitung jumlah hari dalam bulan ini
        $totalDaysInMonth = $now->daysInMonth;

        // Ambil bulan saat ini
        $bulanIni = $now->translatedFormat('F');

        // Ambil tahun saat ini
        $tahunIni = $now->year;

        // Data untuk dikirimkan ke view
        $data = [
            'kelas' => $kelas,
            'siswas' => $siswas,
            'totalDaysInMonth' => $totalDaysInMonth,
            'bulanIni' => $bulanIni,
            'tahunIni' => $tahunIni,
            'now' => $now,
        ];

        return view('absensi.view_absensi', $data);
    }

    public function add_absensi($kelas_id)
    {
        // Temukan kelas yang ingin Anda tampilkan siswanya
        $kelas = Kelas::findOrFail($kelas_id); // Contoh: Anda bisa mengganti ini dengan metode lain sesuai kebutuhan

        // Periksa apakah kelas ditemukan
        if ($kelas) {
            // Periksa apakah kelas memiliki siswa
            if ($kelas->siswas()->exists()) {
                // Dapatkan siswa dari kelas yang ditemukan
                $siswa = $kelas->siswas;

                // Kemudian Anda dapat meneruskan $siswa ke tampilan
                return view('absensi.add_absensi', compact('siswa', 'kelas'));
            } else {
                // Jika kelas tidak memiliki siswa, Anda mungkin ingin menangani ini dengan menampilkan pesan kesalahan atau mengarahkan pengguna kembali.
                return redirect()->back()->with('error', 'Kelas tidak memiliki siswa.');
            }
        } else {
            // Jika kelas tidak ditemukan, Anda mungkin ingin menangani ini dengan menampilkan pesan kesalahan atau mengarahkan pengguna kembali.
            return redirect()->back()->with('error', 'Kelas tidak ditemukan.');
        }
    }



    // masih dalam tahap pengembangan
    public function absensi_store(Request $request)
    {
        // dd($request->all());
        // Validasi input
        $request->validate([
            'kelas_id' => 'required|exists:kelas,id', // tambahkan validasi untuk kelas_id
            'tanggal' => 'required|date',
            'siswa_id' => 'array',
            'siswa_id.*' => 'exists:siswas,id',
            'keterangan' => 'required|array',
            'keterangan.*' => 'required|in:Sakit,Izin,Alpha,Telat,Hadir',
        ]);

        // Temukan kelas berdasarkan siswa pertama
        // $kelas = $request->siswa_id[0]->kelas;
        $siswa = Siswa::findOrFail($request->siswa_id[0]);
$kelas = $siswa->kelas;
        // $kelas = Kelas::findOrFail($request->kelas_id);
        // Simpan data absensi untuk setiap siswa dalam satu operasi
        foreach ($request->siswa_id as $index => $siswa_id) {
            Absensi::create([
                'kelas_id' => $kelas->id,
                'tanggal' => $request->tanggal,
                'siswa_id' => $siswa_id,
                'keterangan' => $request->keterangan[$index],
            ]);
        }

        // Redirect ke halaman view_absensi dengan parameter kelas_id
        return redirect()->route('view_absensi', ['kelas_id' => $kelas->id])->with('success', 'Data absensi berhasil disimpan.');
    }

}
