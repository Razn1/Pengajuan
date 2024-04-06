<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persetujuan;
// use App\Models\User;
// use App\Models\Siswa;
// use App\Models\Pengajuan;
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
        // if (Auth()->user()->level === 'Siswa') {
        //     Auth::logout();
        //     return redirect('/loginsiswa')->with('error', 'Anda Tidak Memiliki Akses');
        // } else {
        $persetujuan = Persetujuan::all();
        return view('persetujuan.index', compact(['persetujuan']));
        // }
    }

    public function terima()
    {
        if (Auth()->user()->level === 'Siswa') {
            Auth::logout();
            return redirect('/loginsiswa')->with('error', 'Anda Tidak Memiliki Akses');
        } else {
            $persetujuan = Persetujuan::where('status', 'diterima')
                ->get();
            return view('persetujuan.index', compact(['persetujuan']));
        }
    }

    public function tolak()
    {
        if (Auth()->user()->level === 'Siswa') {
            Auth::logout();
            return redirect('/login')->with('error', 'Anda Tidak Memiliki Akses');
        } else {
            $persetujuan = Persetujuan::where('status', 'ditolak')
                ->get();
            return view('persetujuan.index', compact(['persetujuan']));
        }
    }

    public function cetak()
    {
        $persetujuan = Persetujuan::all();
        return view('persetujuan.cetak',compact('persetujuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
