<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;

Route::get('/', [JabatanController::class,'index'])->name('jabatan.read');
Route::get('/create', [JabatanController::class,'create'])->name('jabatan.create');
Route::post('/create-proses', [JabatanController::class,'store'])->name('jabatan.createProses');
Route::get('/edit/{id}', [JabatanController::class,'edit'])->name('jabatan.edit');
Route::put('/edit-proses/{id}', [JabatanController::class,'update'])->name('jabatan.update');
Route::delete('/delete/{id}', [JabatanController::class,'destroy'])->name('jabatan.delete');
