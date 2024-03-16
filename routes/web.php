<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('loginproses', [AuthController::class, 'loginproses'])->name('loginproses');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('registerproses', [AuthController::class, 'registerproses'])->name('registerproses');
