<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        // return 'asdas';
        $credentials = $request->only('email', 'password');

        // echo '<pre>';print_r($credentials);die;

        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, redirect ke halaman beranda
            return redirect()->intended('/home');
        } else {
            // Jika otentikasi gagal, kembali ke halaman login dengan pesan error
            // re
            return redirect()->back()->withErrors(['email' => 'Email atau password salah'])->withInput();
        }
    }

    public function huruf(Request $request,$huruf) {
        return view('dictionary');
    }
}
