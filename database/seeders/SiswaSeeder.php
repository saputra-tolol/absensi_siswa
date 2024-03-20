<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('siswas')->insert([
            [
                'profil' => 'gambar_profil1.jpg',
                'nama' => 'John Doe',
                'alamat' => 'Jl. Contoh No. 123',
                'no_hp' => '081234567890',
                'kelas' => 'XII',
                'jurusan' => 'IPA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profil' => 'gambar_profil2.jpg',
                'nama' => 'Jane Doe',
                'alamat' => 'Jl. Contoh No. 456',
                'no_hp' => '081234567891',
                'kelas' => 'XI',
                'jurusan' => 'IPS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profil' => 'gambar_profil2.jpg',
                'nama' => 'Denis',
                'alamat' => 'Jl. Contoh No. 456',
                'no_hp' => '081234567891',
                'kelas' => 'XI',
                'jurusan' => 'IPS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profil' => 'gambar_profil2.jpg',
                'nama' => 'Dontol',
                'alamat' => 'Jl. Contoh No. 456',
                'no_hp' => '081234567891',
                'kelas' => 'XI',
                'jurusan' => 'IPS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profil' => 'gambar_profil2.jpg',
                'nama' => 'tongkol',
                'alamat' => 'Jl. Contoh No. 456',
                'no_hp' => '081234567891',
                'kelas' => 'XI',
                'jurusan' => 'IPS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}