<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class DashboardController extends Controller
{
    public function index()
    {
        $pengajuan = Pengajuan::count();

        return view('home.dashboard',compact('pengajuan'));
    }
}


