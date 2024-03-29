<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Persetujuan;
use App\Models\UploadLaporan;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index()
    {
        $persetujuan = Persetujuan::count();
        $terima = Persetujuan::where('status','diterima')->get()->count();
        $tolak = Persetujuan::where('status','ditolak')->get()->count();
        $laporan = UploadLaporan::count();
        $proposal = Pengajuan::whereIn('status', ['proses','Diterima','Ditolak'])->count();
        return view('home.dashboard', compact('laporan','proposal','persetujuan','terima','tolak'));
    }
}


