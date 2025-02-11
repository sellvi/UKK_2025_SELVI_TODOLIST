<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\TaskController;

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


Route::post('/tambahtask', [TaskController::class, "store"]);
Route::delete('/hapustask/{id_list}', [TaskController::class, "hapus"]);

Route::get("/task/{id_task}/edit", [TaskController::class, "edit"]);
Route::put("/task/{id_task}", [TaskController::class, "update"]);