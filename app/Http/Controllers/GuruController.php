<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Support\Facades\Hash;


class GuruController extends Controller

{
    public function guru()
    {
        $guru = Guru::all();
        $kelas = Kelas::all();
        return view('guru.guru', compact('guru','kelas'));

    }

    public function store(Request $request)
    {

        $request->validate([
            'profil' => 'required|image|mimes:svg,jpg,jpeg,png',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required|email|unique:gurus',
            'password' => 'required',
            'kelas_id' => 'nullable|exists:kelas,id'
        ],[
            'profil'=> 'Profil tidak boleh kosong',
            'profil.image'=> 'Profil harus berupa gambar',
            'profil.mimes'=> 'Profil harus berupa svg,jpg,jpeg,png',
            'nama'=> 'Nama tidak boleh kosong',
            'jenis_kelamin'=> 'Jenis Kelamin tidak boleh kosong',
            'email'=> 'Email tidak boleh kosong',
            'email.email'=> 'Email harus berupa email',
            'email.unique'=> 'Email sudah terdaftar',
            'password'=> 'Password tidak boleh kosong',
        ]);

         // Mengunggah file gambar ke dalam direktori penyimpanan
         $file = $request->file('profil');
         $fileName = time() . '_' . $file->getClientOriginalName();
         $filePath = $file->storeAs('public/images', $fileName);


        Guru::create([
            'profil' => $fileName,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'password' => $request->password,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('guru')->with('success', 'Guru berhasil ditambahkan.');
    }

}
