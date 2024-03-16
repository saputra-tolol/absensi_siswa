<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('loginproses', [AuthController::class, 'loginproses'])->name('loginproses');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('registerproses', [AuthController::class, 'registerproses'])->name('registerproses');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('index', [indexController::class, 'index'])->name('index');
