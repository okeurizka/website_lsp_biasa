<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;

Route::post('/daftar-lsp', [PesertaLspController::class, 'store'])->name('peserta.store');

// Halaman Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman daftar
Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

//Halaman Hubungi-kami
Route::get('/hubungi-kami', function () {
    return view('hubungi-kami');
})->name('hubungi-kami');

//Halaman Berita-terkini
Route::get('/berita-terkini', function () {
    return view('berita-terkini');
})->name('berita-terkini');

//Halaman Jurusan
Route::get('/rpl', function () {
    return view('rpl');
})->name('Rekayasa Perangkat Lunak');

Route::get('/tkj', function () {
    return view('tkj');
})->name('Teknik Komputer & Jaringan');

Route::get('/dkv', function () {
    return view('dkv');
})->name('Desain Komunikasi Visual');

Route::get('/mkt', function () {
    return view('mkt');
})->name('Mekatronika');

Route::get('/tpm', function () {
    return view('tpm');
})->name('Teknik Pemesinan');

Route::get('/tl', function () {
    return view('tl');
})->name('Teknik Pengelasan');

Route::get('/tkr', function () {
    return view('tkr');
})->name('Teknik Kendaraan Ringan');

Route::get('/tbkr', function () {
    return view('tbkr');
})->name('Teknik Bodi Kendaraan Ringan');

Route::get('/aphp', function () {
    return view('aphp');
})->name('Agribisnis Pengolahan Hasil Pertanian');

Route::get('/atph', function () {
    return view('atph');
})->name('Agribisnis Tanaman Pangan & Hortikultura');

// Halaman Profil
Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::prefix('profil')->group(function () {
    Route::get('/visi-misi', function () {
        return view('profil.visi-misi');
    })->name('profil.visi-misi');

    Route::get('/struktur', function () {
        return view('profil.struktur');
    })->name('profil.struktur');

    Route::get('/alur-uji', function () {
        return view('profil.alur-uji');
    })->name('profil.alur-uji');
});
    