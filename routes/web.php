<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\KrsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/tambah', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/update/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'hapus']);
Route::post('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'destroy']);

Route::get('/matakuliah', [MataKuliahController::class, 'index']);
Route::get('/matakuliah/tambah', [MataKuliahController::class, 'create']);
Route::post('/matakuliah/tambah', [MataKuliahController::class, 'store']);
Route::get('/matakuliah/update/{id}', [MataKuliahController::class, 'edit']);
Route::post('/matakuliah/update/{id}', [MataKuliahController::class, 'update']);
Route::get('/matakuliah/hapus/{id}', [MataKuliahController::class, 'hapus']);
Route::post('/matakuliah/hapus/{id}', [MataKuliahController::class, 'destroy']);

Route::get('/krs/{id?}', [KrsController::class, 'index']);
Route::post('/krs/{id?}', [KrsController::class, 'selectedMhs']);
Route::get('/krs/tambah/{nim}', [KrsController::class, 'create']);
Route::post('/krs/tambah/{nim}', [KrsController::class, 'store']);
Route::get('/krs/hapus/{nim}/{kode}', [KrsController::class, 'destroy']);








