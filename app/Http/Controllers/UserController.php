<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth()->user()->level != 'Admin') {
            Auth::logout();
            return redirect('/login')->with('error', 'Anda Tidak Memiliki Akses');
        } else {
            $user = User::whereIn('level',['Pembimbing','Admin'])
                        ->get();
            return view('user.index', compact(['user']));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:5|max:20',
            'level' => 'required'
        ]);
        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,
            $request->except(['_token']),
        ]);
        return redirect('/user')->with('message', 'Data Telah Ditambahkan');
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
        return view('user.edit', compact(['user']));
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
            'username' => 'required',
            'level' => 'required'
        ]);
        $user = User::find($id);
        $user->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'level' => $request->level,
            $request->except(['_token'])
        ]);
        return redirect('/user')->with('update', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('delete', 'Data Telah Dihapus');
    }

    public function prof()
    {
        return view('user.profile');
    }

    public function password($id)
    {
        $user = User::find($id);
        return view('user.password',compact('user'));
    }

    // public function changePassword(Request $request, $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'old_password' => 'required',
    //         'new_password' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     // Cari user berdasarkan ID
    //     $user = User::findOrFail($id);

    //     // Periksa apakah password lama cocok
    //     if (!Hash::check($request->old_password, $user->password)) {
    //         return redirect()->back()->with('error', 'Old password is incorrect');
    //     }

    //     // Update password baru
    //     $user->password = Hash::make($request->new_password);
    //     $user->save();

    //     return redirect('/dashboard')->with('success', 'Password has been changed successfully');
    // }
}
