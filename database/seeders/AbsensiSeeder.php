<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Simpan data absensi secara manual
        DB::table('absensis')->insert([
            'siswa_id' => 1,
            'kelas_id' => 1,
            'tanggal' =>'2024-04-04',
            'keterangan' => 'Hadir',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('absensis')->insert([
            'siswa_id' => 1,
            'kelas_id' => 1,
            'tanggal' =>'2024-04-05',
            'keterangan' => 'Sakit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('absensis')->insert([
            'siswa_id' => 2,
            'kelas_id' => 1,
            'tanggal' =>'2024-04-04',
            'keterangan' => 'Sakit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('absensis')->insert([
            'siswa_id' => 2,
            'kelas_id' => 1,
            'tanggal' =>'2024-04-05',
            'keterangan' => 'Sakit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
