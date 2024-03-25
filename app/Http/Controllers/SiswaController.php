<?php

namespace App\Http\Controllers;

use App\Models\Models\Siswa;
use App\Models\Models\Kelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa() {
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('siswa', compact('siswa', 'kelas'));
    }

    public function store(Request $request) {

        $request->validate([
            'profile' => 'required|images|mimes:svg,jpg,jpeg,png',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telfone' => 'required',
            // 'kelas_id' => 'required',

        ],[
            'profile'=> 'Profil tidak boleh kosong',
            'profile.images'=> 'Profil harus berupa gambar',
            'profile.mimes'=> 'Profil harus berupa svg,jpg,jpeg,png',
            'nama_siswa'=> 'Nama tidak boleh kosong',
            'jenis_kelamin'=> 'Jenis Kelamin tidak boleh kosong',
            'alamat'=> 'alamat tidak boleh kosong',

        ]);

         // Mengunggah file gambar ke dalam direktori penyimpanan
         $file = $request->file('profile');
         $fileName = time() . '_' . $file->getClientOriginalName();
         $filePath = $file->storeAs('public/images', $fileName);


        Siswa::create([
            'profile' => $request->profil,
            'nama_siswa' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telfone' => $request->no_telfone,
            // 'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('guru')->with('success', 'Guru berhasil ditambahkan.');
    }
}
