<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Auth()->user()->level == 'Siswa') {
        //     Auth::logout();
        //     return redirect('/login')->with('error', 'Anda Tidak Memiliki Akses');
        // } else {
        $siswa = User::where('level', 'Siswa')
            ->get();
        return view('siswa.index', compact('siswa'));
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('siswa.edit', compact(['user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'tempat_pkl' => 'required',
            'no_telp' => 'required'
        ]);
        $user = User::find($id);
        $user->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'tempat_pkl' => $request->tempat_pkl,
            'no_telp' => $request->no_telp,
            $request->except(['_token'])
        ]);
        return redirect('/profile')->with('update', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = User::find($id);
        $siswa->delete();
        return redirect('/logoutt')->with('delete', 'Data Telah Dihapus');
    }

    public function profile()
    {
        $siswa = User::all();
        return view('siswa.profile', compact('siswa'));
    }

    public function password($id)
    {
        $siswa = User::find($id);
        return view('siswa.password', compact('siswa'));
    }

    public function changePassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Cari user berdasarkan ID
        $siswa = User::findOrFail($id);

        // Periksa apakah password lama cocok
        if (!Hash::check($request->old_password, $siswa->password)) {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }

        // Update password baru
        $siswa->password = Hash::make($request->new_password);
        $siswa->save();

        return redirect('/profile')->with('success', 'Password has been changed successfully');
    }
}
