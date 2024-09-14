<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\ProdiController;


Route::get('/', [PageController::class, 'index']);
Route::get('/penelitian', [PenelitianController::class, 'index'])->name('penelitian');
Route::get('/pengabdian', [PengabdianController::class, 'index'])->name('pengabdian');
Route::get('/publikasi', [PublikasiController::class, 'index'])->name('publikasi');
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.daftarprodi');
Route::get('/prodi/{kode_prodi}', [ProdiController::class, 'show'])->name('prodi.detailprodi');


