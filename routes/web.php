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
    return view('visidanmisi');
});
Route::get('/sejarah', function(){
    return view('sejarah');
});