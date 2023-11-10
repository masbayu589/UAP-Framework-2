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

Route::prefix('mahasiswa')->group(function () {
    // Route untuk halaman admin/users tanpa menggunakan controller
    Route::get('/pendaftaran', function () {
        return "Ini adalah halaman pendaftaran"; // Sesuaikan dengan respons atau tampilan yang diinginkan
    })->name('home');
    Route::get('/ujian', function () {
        return "Ini adalah halaman ujian"; // Sesuaikan dengan respons atau tampilan yang diinginkan
    })->name('home');
    Route::get('/nilai', function () {
        return "Ini adalah halaman nilai"; // Sesuaikan dengan respons atau tampilan yang diinginkan
    })->name('home');
    // Tambahkan rute lainnya yang mungkin Anda butuhkan di sini
});