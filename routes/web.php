<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('loginproses', [AuthController::class, 'loginproses'])->name('loginproses');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('registerproses', [AuthController::class, 'registerproses'])->name('registerproses');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');



Route::get('guru', [GuruController::class, 'guru'])->name('guru');


Route::get('siswa', [SiswaController::class, 'siswa'])->name('siswa');
Route::post('siswa', [SiswaController::class, 'siswa_store'])->name('siswa_store');

Route::post('guru', [GuruController::class, 'store'])->name('guru_store');
Route::get('kelas', [KelasController::class, 'kelas'])->name('kelas');
Route::post('Kelas', [KelasController::class, 'kelas_store'])->name('kelas_store');
Route::put('Kelas{id}', [KelasController::class, 'kelas_update'])->name('kelas_update');
Route::delete('hapus_kelas{id}', [KelasController::class, 'hapus_kelas'])->name('hapus_kelas');









