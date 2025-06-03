<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman home menampilkan list movie (harus login)
Route::get('/home', [MovieController::class, 'homepage'])->middleware('auth');

// Detail movie (harus login)
Route::get('/movie/{id}/{slug}', [MovieController::class, 'detail'])->middleware('auth');

// CRUD movie dan category
Route::resource('movie', MovieController::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');

// ✅ LOGIN & LOGOUT
Route::get('/login', [AuthController::class, 'loginForm'])->name('login'); // form login
Route::post('/login', [AuthController::class, 'login']);                    // proses login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // logout
