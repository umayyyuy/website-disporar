<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Website disporapar
|--------------------------------------------------------------------------
|
*/
Route::get('/', [App\Http\Controllers\BerandaController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('pembaca');
});
Route::get('/visidanmisi', function(){
    return view('pembaca.bagian.visidanmisi');
});
Route::get('/sejarah', function(){
    return view('sejarah');
});
Route::get('/admin', function(){
    return view('admin.admin');
});