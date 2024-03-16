<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
       return view('auth.login');
    }

    public function loginproses(Request $request)
    {
        $request->validate( [
            'email' =>'required',
            'password' => 'required',

        ]);

        $email = $request->email;
        $password = $request->password;
        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('index');
        } else {
            return redirect()->back()->with('error', 'email atau Password Salah');
        }
    }


    public function register()
    {
        return view('auth.register');
    }

    public function registerproses(Request $request)
    {
        // Validasi data input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3',
        ]);


        // Membuat user baru
        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        // Redirect ke halaman setelah registrasi sukses
        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan masuk.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('succes','Logout berhasil');
    }
}

