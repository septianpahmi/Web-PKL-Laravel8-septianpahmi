<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
Route::middleware(['guest'])->group(function(){
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'login']);
});

Route::get('/home',function(){
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
    //Data Siswa
    Route::get('/datasiswa', [AdminController::class, 'datasiswa']);
    Route::get('/datasiswa/delete/{id}', [AdminController::class, 'delsiswa']);
    Route::get('/datasiswa/edit/{id}', [AdminController::class, 'editsiswa']);
    Route::post('/datasiswa/edit/post/{id}', [AdminController::class, 'editpostsiswa']);
    Route::get('/datasiswa/tambah', [AdminController::class, 'addsiswa']);
    Route::post('/datasiswa/tambah/post', [AdminController::class, 'postsiswa']);
    //Surat Pengantar
    Route::get('/suratpengantar', [AdminController::class, 'suratpengantar']);
    Route::get('/download', [AdminController::class, 'download']);
    Route::get('/print', [AdminController::class, 'print']);
    //Surat Balasan
    Route::get('/balsan', [AdminController::class, 'balasan']);
    Route::get('/balsan/delete/{id}', [AdminController::class, 'delbalasan']);
    Route::get('/balasan/tambah', [AdminController::class, 'addbalasan']);
    Route::post('/balasan/tambah/post', [AdminController::class, 'postbalasan']);
    //Rekap
    Route::get('/rekap', [AdminController::class, 'rekap']);
    Route::get('/rekap/terima/{id}', [AdminController::class, 'terima']);
    Route::get('/rekap/tolak/{id}', [AdminController::class, 'tolak']);
    //Pembimbing
    Route::get('/pembimbing', [AdminController::class, 'pembimbing']);
    Route::get('/pembimbing/edit/{id}', [AdminController::class, 'editpembimbing']);
    Route::get('/pembimbing/delete/{id}', [AdminController::class, 'delpembimbing']);
    Route::post('/pembimbing/edit/post/{id}', [AdminController::class, 'posteditpembimbing']);
    Route::get('/pembimbing/tambah', [AdminController::class, 'addpembimbing']);
    Route::post('/pembimbing/tambah/post', [AdminController::class, 'postpembimbing']);
    //Sertifikat
    Route::get('/sertifikat', [AdminController::class, 'sertifikat']);
    Route::get('/sertifikat/save/{id}', [AdminController::class, 'savepdf']);
    Route::get('/sertifikat/print/{id}', [AdminController::class, 'printpdf']);
    //Nilai
    Route::get('/nilai', [AdminController::class, 'nilai']);
    Route::get('/nilai/tambah', [AdminController::class, 'addnilai']);
    Route::post('/nilai/tambah/post', [AdminController::class, 'postnilai']);
    Route::get('/nilai/edit/{id}', [AdminController::class, 'editnilai']);
    Route::get('/nilai/delete/{id}', [AdminController::class, 'delnilai']);
    Route::post('/nilai/edit/post/{id}', [AdminController::class, 'editpostnilai']);

});
