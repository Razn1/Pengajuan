<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persetujuan;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class PersetujuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::all();
        // $pengajuan = Pengajuan::all();
        // $siswa = Siswa::all();
        if (Auth()->user()->level === 'Siswa') {
            Auth::logout();
            return redirect('/login')->with('error', 'Anda Tidak Memiliki Akses');
        } else {
            $persetujuan = Persetujuan::all();
            return view('persetujuan.index', compact(['persetujuan']));
        }
    }

    public function terima()
    {
        $persetujuan = Persetujuan::where('status', 'diterima')
            ->get();
        return view('persetujuan.index', compact(['persetujuan']));
    }

    public function tolak()
    {
        $persetujuan = Persetujuan::where('status', 'ditolak')
            ->get();
        return view('persetujuan.index', compact(['persetujuan']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tanggal = date('Y-m-d');
        // $user = User::all();
        // $pengajuan = Pengajuan::all();
        // $siswa = Siswa::all();
        // return view('persetujuan.tambah', compact(['user', 'pengajuan', 'siswa'],'tanggal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Persetujuan::create([
        //     'nis' => $request->nis,
        //     'id_user' => $request->id_user,
        //     'tanggal' => $request->tanggal,
        //     'keterangan' => $request->keterangan,
        //     $request->except(['_token']),
        // ]);
        // return redirect('/persetujuan')->with('message', 'data telah tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $persetujuan = Persetujuan::find($id);
        // $user = User::all();
        // $pengajuan = Pengajuan::all();
        // $siswa = Siswa::all();
        // return view('persetujuan.edit', compact(['persetujuan'], 'user', 'pengajuan', 'siswa'));
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
        // $validateData = $request->validate([
        //     'nis' => 'required',
        //     'id_user' => 'required',
        //     'tanggal' => 'required',
        //     'keterangan' => 'required',
        // ]);
        // $persetujuan = Persetujuan::find($id);
        // $persetujuan->update([
        //     'nis' => $request->nis,
        //     'id_user' => $request->id_user,
        //     'tanggal' => $request->tanggal,
        //     'keterangan' => $request->keterangan,
        //     $request->except(['_token']),
        // ]);
        // return redirect('/persetujuan')->with('update', 'data telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $persetujuan = Persetujuan::find($id);
        // $persetujuan->delete();
        // return redirect('/persetujuan')->with('delete', 'data telah dihapus');
    }
}
