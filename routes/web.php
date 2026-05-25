<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::get('/penduduk', [KelurahanController::class, 'penduduk']);