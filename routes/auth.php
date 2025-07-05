<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegisterPage'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'registerUser'])->middleware('guest')->name('register_store');
Route::get('/login', [AuthController::class, 'showLoginPage'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'loginUser'])->middleware('guest')->name('login_store');
Route::get('/logout', [AuthController::class, 'logoutGet'])->name('logout_get');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');