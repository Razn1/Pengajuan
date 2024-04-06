<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('siswa.register');
    }

    public function register(Request $request)
    {
        $validateData = $request->validate([
            'nis' => 'required|unique:users|max:11',
            'username' => 'required|unique:users',
            'password' => 'required|min:5|max:20'
        ]);
        User::create([
            'nis' => $request->nis,
            'level' => 'Siswa',
            'username' => $request->username,
            'password' => bcrypt($request->password),
            $request->except(['_token'])
        ]);
        return redirect('/loginsiswa')->with('message', 'Data Berhasil Ditambahkan');
    }
}
