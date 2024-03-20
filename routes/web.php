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
use App\Mail\SendEmail;
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


// route::get('/send-email',function(){
//     $data = [
//         'name' => 'test',
//         'body' => 'test'
//     ];

//     Mail::to('alfarrel218@gmail.com')->send(new SendEmail($data));

//     dd("Email Berhasil Dikirim");
// });


//Admin dan Pembimbing
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('/user', [UserController::class, 'index'])->middleware('Admin');
Route::get('/user/tambah', [UserController::class, 'create'])->middleware('Admin');
Route::post('/user/save', [UserController::class, 'store'])->middleware('Admin');
Route::get('/user/{id}/delete', [UserController::class, 'destroy'])->middleware('Admin');
Route::get('/user/{id}/edit', [UserController::class, 'show'])->middleware('Admin');
Route::post('/user/{id}/update', [UserController::class, 'update'])->middleware('Admin');


Route::get('/siswa', [SiswaController::class, 'index'])->middleware('Pembimbing');


Route::get('/prof', [UserController::class, 'prof'])->middleware('Pembimbing');
Route::get('/pengajuan', [PengajuanController::class, 'index'])->middleware('Pembimbing');
Route::get('/pengajuan/terima', [PengajuanController::class, 'terima'])->middleware('Pembimbing');
Route::get('/pengajuan/tolak', [PengajuanController::class, 'tolak'])->middleware('Pembimbing');
Route::post('/pengajuan/eksekusi', [PengajuanController::class, 'eksekusi'])->middleware('Pembimbing');


Route::get('/persetujuan', [PersetujuanController::class, 'index'])->middleware('Pembimbing');
Route::get('/persetujuan/terima', [PersetujuanController::class, 'terima'])->middleware('Pembimbing');
Route::get('/persetujuan/tolak', [PersetujuanController::class, 'tolak'])->middleware('Pembimbing');


// Route::get('/user/change-password/{id}',[UserController::class,'password'])->middleware('Admin');
// Route::post('/user/change/{id}',[UserController::class,'changePassword'])->name('user.change.password');


//Khusus Siswa
Route::get('/profile', [SiswaController::class, 'profile'])->middleware('Siswa');
Route::post('/siswa/{id}/update', [SiswaController::class, 'show'])->middleware('Siswa');
Route::post('/siswa/{id}/simpan', [SiswaController::class, 'update'])->middleware('Siswa');


Route::get('/mengajukan', [PengajuanController::class, 'create'])->middleware('Siswa');
Route::get('/pengajuansiswa', [PengajuanController::class, 'indexsiswa'])->middleware('Siswa');
Route::get('/pengajuansiswa/terima', [PengajuanController::class, 'diterima'])->middleware('Siswa');
Route::get('/pengajuansiswa/tolak', [PengajuanController::class, 'ditolak'])->middleware('Siswa');
Route::post('/pengajuan/simpan', [PengajuanController::class, 'store'])->middleware('Siswa');


Route::get('/pengajuan/tambah', [PengajuanController::class, 'create'])->middleware('Siswa');
Route::get('/pengajuan/{id}/open', [PengajuanController::class, 'open'])->middleware('auth');


// Route::get('/persetujuan/tambah', [PersetujuanController::class, 'create']);
// Route::post('/persetujuan/simpan', [PersetujuanController::class, 'store']);
// Route::get('/persetujuan/{id}/delete', [PersetujuanController::class, 'destroy']);
// Route::get('/persetujuan/{id}/edit', [PersetujuanController::class, 'show']);
// Route::post('/persetujuan/{id}/update', [PersetujuanController::class, 'update']);