<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

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

Route::get('bootstrap2', function () {
    return view('bootstrap2');
})->name('bootstrap2');
