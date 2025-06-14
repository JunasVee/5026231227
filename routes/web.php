<?php

// routes/web.php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
    return view('blog');
});

// ─── Your new routes ────────────────────────────────────
// Assuming you have:
//   resources/views/input.blade.php
//   resources/views/js1.blade.php
//   resources/views/js2.blade.php

Route::get('input', function () {
    return view('input');
})->name('input');

Route::get('js1', function () {
    return view('js1');
})->name('js1');

Route::get('js2', function () {
    return view('js2');
})->name('js2');

Route::get('bootstrap1', function () {
    return view('bootstrap1');
})->name('bootstrap1');

Route::get('linktree', function () {
    return view('linktree');
})->name('linktree');

Route::get('pertemuan8', function () {
    return view('pertemuan8');
})->name('pertemuan8');

Route::get('frontend', function () {
    return view('frontend');
})->name('frontend');

Route::get('template', function () {
    return view('template');
})->name('template');

Route::get('dosen', [Coba::class, "index"]);

// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai2', [PegawaiDBController::class, 'index2']);
Route::get('/tugascrud', [PegawaiDBController::class, 'index3']);

Route::get('/latihan1', [PegawaiDBController::class, 'latihan1']);
Route::get('/latihan1/tambah', [PegawaiController::class, 'tambahkeranjang']);
Route::get('/latihan1/batal/{id}', [PegawaiController::class, 'batalkeranjang']);
Route::post('/latihan1/store', [PegawaiController::class, 'storekeranjang']);

Route::get('/latihan2', [PegawaiDBController::class, 'latihan2']);

Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

Route::get('/karyawan',[KaryawanController::class,'karyawan']);
Route::get('/karyawan/tambah',[KaryawanController::class,'tambah']);
Route::post('/karyawan/store',[KaryawanController::class,'store']);
Route::get('/karyawan/edit/{id}',[KaryawanController::class,'edit']);
Route::post('/karyawan/update',[KaryawanController::class,'update']);
Route::get('/karyawan/hapus/{id}',[KaryawanController::class,'hapus']);
