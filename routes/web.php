<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;

// Pages
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

// Auth
Route::get('/register', [AuthController::class, 'showRegisterPage'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'registerUser'])->middleware('guest')->name('register_store');
Route::get('/login', [AuthController::class, 'showLoginPage'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'loginUser'])->middleware('guest')->name('login_store');

Route::get('/logout', [AuthController::class, 'logoutGet'])->name('logout_get');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth')->name('dashboard');