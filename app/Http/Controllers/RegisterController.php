<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('siswa.register');
    }

    public function register(Request $request)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:11',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
        User::create([
            'nis' => $request->nis,
            'email' => $request->email,
            'level' => 'Siswa',
            'username' => $request->username,
            'password' => bcrypt($request->password),
            $request->except(['_token'])
        ]);
        return redirect('/loginsiswa')->with('message', 'Data Berhasil Ditambahkan');
    }
}
