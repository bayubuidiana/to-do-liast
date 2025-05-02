<?php
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


//statis
Route::get('/', function () {
    return view('index');    
});

Route::get('/home', function () {
    return view('home');    
});
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registrasi', function () {
    return view('registrasi');    
});

//controller
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);



Route::resource('users', UserController::class);
