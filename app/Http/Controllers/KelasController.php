<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function kelas(){
        $kelas = Kelas::all();
        return view ('kelas', compact('kelas'));
    }

    public function kelas_store(Request $request){
        $request->validate([
            'nama_kelas'=> 'required',
            'jurusan'=> 'required',
            // 'wali_kelas'=> 'required',

        ]);

        $kelas = new Kelas();
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->jurusan = $request->jurusan;
        // $kelas->wali_kelas = $request->wali_kelas;
        $kelas->save();

        return redirect()->route('kelas')->with('success', 'Kelas berhasil ditambahkan');

    }

    public function kelas_update(Request $request,$id){
        $request->validate([
            'nama_kelas' => 'required',
            'jurusan' => 'required',
            // 'wali_kelas' =>'required',
        ]);

        $kelas = Kelas::find($id);

        // Update data kelas dengan data baru
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->jurusan = $request->jurusan;
        // $kelas->wali_kelas = $request->wali_kelas;
        $kelas->update();

        return redirect()->route('kelas')->with('success', 'Data kelas berhasil diperbarui');
    }

    public function hapus_kelas($id)
    {
            $data = Kelas::findOrFail($id);
            $data->delete();

            return redirect()->route('kelas')->with('success', 'Data kelas berhasil dihapus');

    }

    public function detail_kelas($id){
        $kelas = Kelas::findOrFail($id);
        $siswa = $kelas->siswa;

        return view('detail_kelas', compact('kelas','siswa'));
    }
}
