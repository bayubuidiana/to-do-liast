<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Database\Seeders\TodoSeeder;
use Illuminate\Support\Facades\Route;

// ========================
// Halaman Umum (Statis)
// ========================
Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

// ========================
// Autentikasi
// ========================

// Tampilkan form login
Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest'); 

// Proses login
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth'); 

// Tampilkan form registrasi
Route::get('/registrasi', function () {
    return view('registrasi');
})->middleware('guest');

// Proses registrasi
Route::post('/registrasi', [AuthController::class, 'register'])->name('register');

// ========================
// Routes todo
// ========================
Route::get('/todo', [TodoController::class, 'todo']);


// ========================
// Resource Routes
// ========================

// Hanya bisa diakses oleh yang sudah login
Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('todo', TodoController::class);
});
