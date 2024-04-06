<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginsiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PersetujuanController;
use App\Http\Controllers\UploadLaporanController;
use App\Mail\SendEmail;
use App\Models\UploadLaporan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/l', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/PostLogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/regis', [RegisterController::class, 'register']);


Route::get('/log', [LoginsiswaController::class, 'index']);
Route::get('/loginsiswa', [LoginsiswaController::class, 'index'])->name('loginsiswa');
Route::post('/PostLoginn', [LoginsiswaController::class, 'loginsis']);
Route::get('/logoutt', [LoginsiswaController::class, 'logout']);


//Admin dan Pembimbing
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/user', [UserController::class, 'index'])->middleware('Admin');
Route::get('/user/tambah', [UserController::class, 'create'])->middleware('Admin');
Route::post('/user/save', [UserController::class, 'store'])->middleware('Admin');
Route::get('/user/{id}/delete', [UserController::class, 'destroy'])->middleware('Admin');
Route::get('/user/{id}/edit', [UserController::class, 'show'])->middleware('Pembimbing');
Route::post('/user/{id}/update', [UserController::class, 'update'])->middleware('Pembimbing');


Route::get('/siswa', [SiswaController::class, 'index'])->middleware('Pembimbing');
Route::get('/siswa/{id}/ed', [SiswaController::class, 'edit'])->middleware('Pembimbing');
Route::post('/siswa/{id}/up', [SiswaController::class, 'up'])->middleware('Pembimbing');

Route::get('/prof', [UserController::class, 'prof'])->middleware('Pembimbing');
Route::get('/pengajuan', [PengajuanController::class, 'index'])->middleware('Pembimbing');
Route::get('/pengajuan/terima', [PengajuanController::class, 'terima'])->middleware('Pembimbing');
Route::get('/pengajuan/tolak', [PengajuanController::class, 'tolak'])->middleware('Pembimbing');
Route::post('/pengajuan/eksekusi', [PengajuanController::class, 'eksekusi'])->middleware('Pembimbing');


Route::get('/laporan', [UploadLaporanController::class, 'index'])->middleware('auth');
Route::get('/persetujuan/cetak',[PersetujuanController::class,'cetak'])->middleware('Pembimbing');


Route::get('/persetujuan', [PersetujuanController::class, 'index'])->middleware('Pembimbing');
Route::get('/persetujuan/terima', [PersetujuanController::class, 'terima'])->middleware('Pembimbing');
Route::get('/persetujuan/tolak', [PersetujuanController::class, 'tolak'])->middleware('Pembimbing');


Route::get('/user/change-password/{id}', [UserController::class,'password'])->middleware('auth');
Route::post('/user/change/{id}', [UserController::class,'changePassword'])->name('user.change.password');


//Khusus Siswa
Route::get('/profile', [SiswaController::class, 'profile'])->middleware('Siswa');
Route::get('/siswa/{id}/u', [SiswaController::class, 'show'])->middleware('Siswa');
Route::post('/siswa/{id}/simpan', [SiswaController::class, 'update'])->middleware('Siswa');
Route::get('/siswa/{id}/delete', [SiswaController::class, 'destroy'])->middleware('Siswa');


Route::get('/siswa/change-password/{id}', [SiswaController::class,'password'])->middleware('auth');
Route::post('/siswa/change/{id}', [SiswaController::class,'changePassword'])->name('siswa.change.password');


Route::post('/laporan/tambah', [UploadLaporanController::class, 'store'])->middleware('Siswa');
Route::get('/laporan/{id}/edit', [UploadLaporanController::class, 'show'])->middleware('Siswa');
Route::post('/laporan/{id}/update', [UploadLaporanController::class, 'update'])->middleware('Siswa');
Route::get('/laporan/{id}/open', [UploadLaporanController::class, 'open'])->middleware('auth');


Route::get('/mengajukan', [PengajuanController::class, 'create'])->middleware('Siswa');
Route::get('/pengajuansiswa', [PengajuanController::class, 'indexsiswa'])->middleware('Siswa');
Route::get('/pengajuansiswa/terima', [PengajuanController::class, 'diterima'])->middleware('Siswa');
Route::get('/pengajuansiswa/tolak', [PengajuanController::class, 'ditolak'])->middleware('Siswa');
Route::post('/pengajuan/simpan', [PengajuanController::class, 'store'])->middleware('Siswa');


Route::get('/pengajuan/tambah', [PengajuanController::class, 'create'])->middleware('Siswa');
Route::get('/pengajuan/{id}/open', [PengajuanController::class, 'open'])->middleware('auth');

