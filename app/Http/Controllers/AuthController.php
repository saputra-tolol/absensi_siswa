<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
       return view('auth.login');
    }

    public function loginproses(Request $request)
    {
        $request->Validate($request, [
            'username' =>'required',
            'password' => 'required',

        ]);

        $username = $request->username;
        $password = $request->password;
        if (auth()->attempt(['username' => $username, 'password' => $password])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau Password Salah');
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
}

