<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\EmailVerificationController;

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

// Email verification
Route::get('/email/verify', [EmailVerificationController::class, 'emailVerificationNotice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'emailVerificationHandler'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [EmailVerificationController::class, 'emailResendHandler'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Forgot password
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendPasswordResetLink'])
    ->middleware(['guest', 'throttle:3,1'])
    ->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'handlingPasswordResetToken'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'changePasswordSubmit'])->middleware('guest')->name('password.update');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');