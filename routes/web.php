<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;

Route::get('/', [JabatanController::class,'index'])->name('jabatan.read');
