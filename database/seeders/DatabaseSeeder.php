<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Guru;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        Kelas::create([
            'nama_kelas' => 'XII',
            'jurusan' => 'RPL',
        ]);

        Kelas::create([
            'nama_kelas' => 'XI',
            'jurusan' => 'RPL',
        ]);

        Kelas::create([
            'nama_kelas' => 'X',
            'jurusan' => 'RPL',
        ]);

        Guru::create([
            'profil' => 'Profil guru 1',
            'nama' => 'Moh. Munir S.com',
            'jenis_kelamin' => 'Laki-laki',
            'email' => 'guru1@example.com',
            'password' => bcrypt('password'),
        ]);

        Guru::create([
            'profil' => 'Profil guru 2',
            'nama' => 'Ferdian Nada',
            'jenis_kelamin' => 'Laki-laki',
            'email' => 'guru2@example.com',
            'password' => bcrypt('password'),
        ]);

        Siswa::create([
            'profile' => 'Profil siswa 1',
            'nama_siswa' => 'Adi Bagus Saputra',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Tlogosari',
            'no_telfone' => '08123456789',
            'kelas_id' => 1,
        ]);

        Siswa::create([
            'profile' => 'Profil siswa 2',
            'nama_siswa' => 'Erika Nur Cahyani',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'SDM family',
            'no_telfone' => '08987654321',
            'kelas_id' => 1,
        ]);
        Siswa::create([
            'profile' => 'Profil siswa 2',
            'nama_siswa' => 'Ahmad Rizal Afandi',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Planet Mangli',
            'no_telfone' => '08987654321',
            'kelas_id' => 2,
        ]);
        Siswa::create([
            'profile' => 'Profil siswa 2',
            'nama_siswa' => 'Romy Pratama',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Plosok Nganjukan',
            'no_telfone' => '08987654321',
            'kelas_id' => 2,
        ]);
        Siswa::create([
            'profile' => 'Profil siswa 2',
            'nama_siswa' => 'Jovan febri',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Tonggone Gito',
            'no_telfone' => '08987654321',
            'kelas_id' => 3,
        ]);

    }
}
