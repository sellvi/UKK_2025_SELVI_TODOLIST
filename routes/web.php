<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('login.index');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/tampil', [ListController::class, "index"]);
});

Route::get('/list/{id}', [ListController::class, "show"]);
Route::post('/tambahlist', [ListController::class, "store"]);
Route::delete('/hapuslist/{id}', [ListController::class, "hapus"]);


Route::post('/tambahtask', [TaskController::class, "store"]);
Route::delete('/hapustask/{id_list}', [TaskController::class, "hapus"]);

Route::get("/task/{id_task}/edit", [TaskController::class, "edit"]);
Route::put("/task/{id_task}", [TaskController::class, "update"]);


Route::get('/login', function () {return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', function () {return view('auth.register');
})->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/layouts', function () {return view('layouts.index');
})->middleware('auth')->name('layouts');

Route::get('/logout', function () {return view('auth.logout');
})->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');