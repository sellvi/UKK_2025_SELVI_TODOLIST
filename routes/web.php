<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('login.index');
// });

Route::get('/tampil', [ListController::class, "index"]);
Route::get('/tambahlist', [ListController::class, "store"]);
Route::get('/hapuslist/{id}', [ListController::class, "hapus"]);