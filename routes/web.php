<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\KaryawanController;

Route::get('/', [Dashboard::class,'index'] )->name('index');


//route jabatan
Route::get('/jabatans', [JabatanController::class,'index'])->name('jabatan.read');
Route::get('/create', [JabatanController::class,'create'])->name('jabatan.create');
Route::post('/create-proses', [JabatanController::class,'store'])->name('jabatan.createProses');
Route::get('/edit/{id}', [JabatanController::class,'edit'])->name('jabatan.edit');
Route::put('/edit-proses/{id}', [JabatanController::class,'update'])->name('jabatan.update');
Route::delete('/delete/{id}', [JabatanController::class,'destroy'])->name('jabatan.delete');
Route::get('/search', [JabatanController::class,'search'])->name('jabatan.search');

//route cuti
Route::get('/cuti', [CutiController::class,'index'])->name('cuti.read');
Route::get('/cuti/create', [CutiController::class,'create'])->name('cuti.create');
Route::post('/cuti/create-proses', [CutiController::class,'store'])->name('cuti.createProses');
Route::get('/cuti/edit/{id}', [CutiController::class,'edit'])->name('cuti.edit');
Route::put('/cuti/edit-proses/{id}', [CutiController::class,'update'])->name('cuti.update');
Route::delete('/cuti/delete/{id}', [CutiController::class,'destroy'])->name('cuti.delete');

// route karyawan
Route::get('/karyawans', [KaryawanController::class,'index'])->name('karyawans.index');
Route::get('/karyawans/create', [KaryawanController::class,'create'])->name('karyawans.create');
Route::post('/karyawans/create-proses', [KaryawanController::class,'store'])->name('karyawans.store');
Route::get('/karyawans/edit/{id}', [KaryawanController::class,'edit'])->name('karyawans.edit');
Route::put('/karyawans/edit-proses/{id}', [KaryawanController::class,'update'])->name('karyawans.update');
Route::delete('/karyawans/delete/{id}', [KaryawanController::class,'destroy'])->name('karyawans.delete');


//route absensi
Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.read');
Route::post('/absensi/create-proses', [AbsensiController::class, 'store'])->name('absensi.createProses');
Route::get('/absensi/absensiHadir', [AbsensiController::class, 'getHadir'])->name('absensi.absensiHadir');
Route::get('/absensi/absensiAlpha', [AbsensiController::class, 'getAlpha'])->name('absensi.absensiAlpha');
