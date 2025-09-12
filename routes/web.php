<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Website disporapar
|--------------------------------------------------------------------------
|
*/

// beranda
Route::get('/', function () {
    return view('pembaca.beranda.index');
})->name('pembaca.beranda');

// profil
Route::get('/visi-misi', function () {
    return view('pembaca.profil.visi-misi');
})->name('pembaca.visi-misi');

Route::get('/struktur-organisasi', function () {
    return view('pembaca.profil.struktur');
})->name('pembaca.struktur');

Route::get('/sejarah-singkat', function () {
    return view('pembaca.profil.sejarah');
})->name('pembaca.sejarah');

// layanan
Route::get('/pemudaan', function () {
    return view('pembaca.bidang.pemudaan');
})->name('pembaca.pemudaan');

Route::get('/olahraga', function () {
    return view('pembaca.bidang.olahraga');
})->name('pembaca.olahraga');

Route::get('/pariwisata', function () {
    return view('pembaca.bidang.pariwisata');
})->name('pembaca.pariwisata');

// berita
Route::get('/berita', function () {
    return view('pembaca.berita.berita');
})->name('pembaca.berita');