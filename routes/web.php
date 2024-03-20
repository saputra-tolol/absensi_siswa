<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;

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
