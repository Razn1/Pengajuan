<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Persetujuan;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index()
    {
        $persetujuan = Persetujuan::count();
        $pengajuan = Pengajuan::count();
        return view('home.dashboard', compact('pengajuan','persetujuan'));
    }
}


