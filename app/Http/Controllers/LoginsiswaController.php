<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginsiswaController extends Controller
{
    public function index()
    {
        return view('siswa.loginsiswa');
    }
    public function loginsis(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {;
            return redirect('/dashboard')->with('message', 'Berhasil Login');
        } else {
            return redirect('/loginsiswa')->with('delete', 'Username dan Password Anda salah');
        };
    }
    public function logout()
    {
        Auth::logout();
        return view('home');
    }
}
