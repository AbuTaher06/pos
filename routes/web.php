<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register.form');
Route::post('user-register', [UserController::class, 'UserRegistration'])->name('user-register');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [UserController::class, 'login'])->name('login');

//Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [UserController::class, 'index'])->middleware('auth')->name('dashboard');

