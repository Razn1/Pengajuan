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

route::get('/send-email',function(){
    $data = [
        'name' => 'test',
        'body' => 'test'
    ];

    Mail::to('alfarrel218@gmail.com')->send(new SendEmail($data));

    dd("Email Berhasil Dikirim");
});


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/tambah', [UserController::class, 'create']);
    Route::post('/user/save', [UserController::class, 'store']);
    Route::get('/user/{id}/delete', [UserController::class, 'destroy']);
    Route::get('/user/{id}/edit', [UserController::class, 'show']);
    Route::post('/user/{id}/update', [UserController::class, 'update']);

    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/profile',[SiswaController::class,'profile']);
    Route::get('/siswa/{id}/edit', [SiswaController::class, 'profile']);
    Route::post('/siswa/{id}/update', [SiswaController::class, 'update']);
    
    Route::get('/mengajukan', [PengajuanController::class, 'create']);
    Route::get('/pengajuan', [PengajuanController::class, 'index']);
    Route::get('/pengajuan/terima', [PengajuanController::class, 'terima']);
    Route::get('/pengajuan/tolak', [PengajuanController::class, 'tolak']);

    Route::get('/pengajuansiswa', [PengajuanController::class, 'indexsiswa']);
    Route::get('/pengajuansiswa/terima', [PengajuanController::class, 'diterima']);
    Route::get('/pengajuansiswa/tolak', [PengajuanController::class, 'ditolak']);

    Route::get('/pengajuan/tambah', [PengajuanController::class, 'create']);
    Route::post('/pengajuan/simpan', [PengajuanController::class, 'store']);
    Route::post('/pengajuan/eksekusi', [PengajuanController::class, 'eksekusi']);
    Route::get('/pengajuan/{id}/open', [PengajuanController::class, 'open']);
   
    Route::get('/persetujuan', [PersetujuanController::class, 'index']);
    Route::get('/persetujuan/terima', [PersetujuanController::class, 'terima']);
    Route::get('/persetujuan/tolak', [PersetujuanController::class, 'tolak']);

    // Route::get('/persetujuan/tambah', [PersetujuanController::class, 'create']);
    // Route::post('/persetujuan/simpan', [PersetujuanController::class, 'store']);
    // Route::get('/persetujuan/{id}/edit', [PersetujuanController::class, 'show']);
    // Route::get('/persetujuan/{id}/hapus', [PersetujuanController::class, 'destroy']);
    // Route::post('/persetujuan/{id}/update', [PersetujuanController::class, 'update']);
});
