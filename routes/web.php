<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::prefix('/mahasiswa')->group(function () {
    Route::get('/pendaftaran', function () {
        return 'Halaman pendaftaran untuk pendaftaran';
    });

    Route::get('/ujian', function () {
        return 'Halaman Ujian untuk /ujian';
    });

    Route::get('/nilai', function () {
        return 'Halaman nilai untuk /nilai';
    });
});

Route::get('/', function () {
    return view('mahasiswa');
});