<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SuratController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::get('/penduduk', [PendudukController::class, 'penduduk']);
// Route::get('/surat', [PendudukController::class, 'daftarSurat']);
Route::resource('/surat', SuratController::class);