<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Persetujuan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Admin dan Pembimbing
    public function index()
    {
        $pengajuan = Pengajuan::where('status', 'proses')
            ->get();
        $user = User::where('level', ['Pembimbing', 'Admin'])
            ->get();
        return view('pengajuan.index', compact(['pengajuan'], 'user',));
    }

    public function terima()
    {
        $pengajuan = Pengajuan::where('status', 'diterima')
            ->get();
        $user = User::where('level', ['Pembimbing', 'Admin'])
            ->get();
        return view('pengajuan.index', compact(['pengajuan'], 'user',));
    }

    public function tolak()
    {
        $pengajuan = Pengajuan::where('status', 'ditolak')
            ->get();
        $user = User::where('level', ['Pembimbing', 'Admin'])
            ->get();
        return view('pengajuan.index', compact(['pengajuan'], 'user',));
    }

    //Khusus Siswa
    public function indexsiswa()
    {
        $userId = Auth()->User()->nis;

        // Ambil pengajuan hanya untuk pengguna yang masuk saat ini
        $pengajuan = Pengajuan::where('nis', $userId)
            ->where('status', 'proses')
            ->get();
    
        // Jika ingin menyertakan informasi pengguna dalam tampilan juga
        $user = User::find($userId);
    
        return view('pengajuan.indexsiswa', compact('pengajuan', 'user'));
    }

    public function diterima()
    {
        $userId = Auth()->User()->nis;

        // Ambil pengajuan hanya untuk pengguna yang masuk saat ini
        $pengajuan = Pengajuan::where('nis', $userId)
            ->where('status', 'diterima')
            ->get();
    
        // Jika ingin menyertakan informasi pengguna dalam tampilan juga
        $user = User::find($userId);
    
        return view('pengajuan.indexsiswa', compact('pengajuan', 'user'));
    }

    public function ditolak()
    {
        $userId = Auth()->User()->nis;

        // Ambil pengajuan hanya untuk pengguna yang masuk saat ini
        $pengajuan = Pengajuan::where('nis', $userId)
            ->where('status', 'ditolak')
            ->get();
    
        // Jika ingin menyertakan informasi pengguna dalam tampilan juga
        $user = User::find($userId);
    
        return view('pengajuan.indexsiswa', compact('pengajuan', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Khusus Siswa
    public function create()
    {

        $siswa = User::where('level', 'Siswa')
            ->get();
        return view('mengajukan.index', compact(['siswa'],));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Khusus Siswa
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul_laporan' => 'required',
            'proposal' => 'required|max:2048',
        ]);

        $berkas = $request->file('proposal');
        $namaProposal = time() . '_' . $berkas->getClientOriginalName();
        $berkas->move(public_path('uploads'), $namaProposal);
        // Pastikan hanya menerima berkas PDF
        if ($berkas->getClientOriginalExtension() !== 'pdf') {
            return redirect()->back()->with('delete', 'Proposal harus pdf');
        }

        Pengajuan::create([
            'nis' => $request->nis,
            'judul_laporan' => $request->judul_laporan,
            'proposal' => $namaProposal,
            'status' => 'proses',
            $request->except(['_token']),
        ]);

        return redirect('/pengajuansiswa')->with('message', 'data telah tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengajuan = Pengajuan::find($id);
        $siswa = User::all();
        return view('pengajuan.edit', compact(['pengajuan'], 'siswa'));
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
        $pengajuan = Pengajuan::find($id);
        $pengajuan->update([
            'nis' => $request->nis,
            'judul_laporan' => $request->judul_laporan,
            'proposal' => $request->proposal,
            'tanggal' => $request->tanggal,
            $request->except(['_token']),
        ]);
        return redirect('/pengajuan')->with('update', 'data telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajuan = Pengajuan::find($id);
        $pengajuan->delete();
        return redirect('/pengajuan')->with('delete', 'data telah dihapus');
    }

    public function open($id)
    {
        $pengajuan = Pengajuan::find($id);
        return view('pengajuan.open', compact('pengajuan',));
    }

    public function eksekusi(Request $request)
    {
        $validateData = $request->validate([
            'tanggal_acc' => 'required',
        ]);

        $today = Carbon::today();

        Persetujuan::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_user' => $request->id_user,
            'id_pengajuan' => $request->id_pengajuan,
            'status' => $request->status,
            'tanggal_acc' => $today,
            $request->except(['_token'])
        ]);

        $idp = $request->id_pengajuan;
        $pengajuan = Pengajuan::find($idp);

        $pengajuan->update([
            'status' => $request->status
        ]);
        return redirect('/persetujuan')->with('message', 'Data Berhasil Ditambahkan');
    }
}
