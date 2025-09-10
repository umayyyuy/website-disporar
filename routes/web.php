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
