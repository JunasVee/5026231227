<?php

// routes/web.php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;


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

Route::get('frontend', function () {
    return view('frontend');
})->name('frontend');

Route::get('dosen', [Coba::class, "index"]);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
