<?php

use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\CutiController;


//route jabatan
Route::get('/', [JabatanController::class,'index'])->name('jabatan.read');
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

//route absensi
Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.createProses');
Route::get('/index/absensi', [AbsensiController::class, 'index'])->name('absensi.read');