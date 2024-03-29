<?php

namespace App\Http\Controllers;

use App\Models\UploadLaporan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UploadLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userLevel = Auth()->User()->level;

        if ($userLevel == 'Admin' ||  $userLevel == 'Pembimbing') {
            $laporan = UploadLaporan::all();
        } else {
            $userId = Auth()->User()->nis;

            $laporan = UploadLaporan::where('nis', $userId)->get();
        }
        return view('laporan.index', compact(['laporan']));
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
        $validateData = $request->validate([
            'judul' => 'required',
            'laporan' => 'required|max:2048|mimes:pdf',
        ]);

        if ($request->hasFile('laporan')) {
            $berkas = $request->file('laporan');
            $namaLaporan = time() . '_' . $berkas->getClientOriginalName();

            if ($berkas->getClientOriginalExtension() !== 'pdf') {
                return redirect()->back()->with('delete', 'Laporan harus berupa file PDF');
            }

            $berkas->move(public_path('uploads'), $namaLaporan);

            UploadLaporan::create([
                'nis' => Auth::user()->nis,
                'judul' => $request->judul,
                'laporan' => $namaLaporan,
            ]);

            return redirect('/laporan')->with('message', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('delete', 'Tidak ada berkas yang diunggah');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laporan = UploadLaporan::find($id);
        return view('laporan.edit', compact(['laporan']));
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
            'judul' => 'required',
            'laporan' => 'nullable|max:10000|mimes:pdf'
        ]);

        // Temukan laporan berdasarkan ID
        $laporan = UploadLaporan::findOrFail($id);

        // Hapus laporan lama dari folder "uploads" jika ada laporan baru yang diunggah
        if ($request->hasFile('laporan')) {
            Storage::delete('uploads/' . $laporan->laporan);

            // Simpan file laporan baru yang diunggah
            $berkas = $request->file('laporan');
            $namaLaporan = time() . '_' . $berkas->getClientOriginalName();
            $berkas->move(public_path('uploads'), $namaLaporan);

            // Perbarui nama file laporan baru dalam database
            $laporan->update([
                'laporan' => $namaLaporan,
            ]);
        }

        // Perbarui data laporan dalam database dengan data baru
        $laporan->update([
            'judul' => $request->judul,
        ]);

        return redirect('/laporan')->with('update', 'Data Berhasil Diupdate');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function open($id)
    {
        $laporan = UploadLaporan::find($id);
        return view('laporan.open', compact('laporan'));
    }
}
