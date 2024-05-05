<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PenelitianController;

Route::get('/', [PageController::class, 'index']);
// Route::get('/penelitian', [PenelitianController::class, 'index']);
Route::get('/penelitian', function() {
  return view('penelitian', ["title" => "Penelitian"]);
});
