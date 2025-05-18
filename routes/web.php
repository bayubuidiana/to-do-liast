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
// complate Routes
// ========================
Route::patch('/todo/{todo}/toggle', [TodoController::class, 'toggle'])->name('todo.toggle');



// ========================
// Resource Routes
// ========================
// use App\Http\Controllers\AdminUserController;

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/create-user', [UserController::class, 'create'])->name('admin.user.create');
// });







// ========================
// Resource Routes
// ========================

// ✅ GUEST & AUTH bisa melihat daftar users dan todos
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');

// ✅ AUTHENTICATED USER baru bisa CRUD
Route::middleware(['auth'])->group(function () {
    // Users
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show'); // optional

    // Todos
    Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
    Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');
    Route::get('/todo/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
    Route::put('/todo/{todo}', [TodoController::class, 'update'])->name('todo.update');
    Route::delete('/todo/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');
    Route::get('/todo/{todo}', [TodoController::class, 'show'])->name('todo.show'); // optional

    // Toggle task completion
    Route::patch('/todo/{todo}/toggle', [TodoController::class, 'toggle'])->name('todo.toggle');
});

