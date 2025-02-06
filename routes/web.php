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
Route::get('/list/{id}', [ListController::class, "show"]);
Route::post('/tambahlist', [ListController::class, "store"]);
Route::delete('/hapuslist/{id}', [ListController::class, "hapus"]);