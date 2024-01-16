<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\DatamahasiswaController;
use App\Http\Controllers\ProfileController;

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

Route::prefix('dosen')->group(function () {     
    Route::get('/profile', function () {
        return view('v_profile'); 
    })->name('profile');
    Route::get('/data_pengampu', function () {
        return view('v_ampu'); 
    })->name('pengampu');
});

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

Route::get('/', [ProfileController::class, 'index']);

Route::get('/viewkrs', [KrsController::class, 'index']);

Route::get('/datamahasiswa', [DatamahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/datamahasiswa/{nim}/krs', [DatamahasiswaController::class, 'showKrs'])->name('mahasiswa.krs');