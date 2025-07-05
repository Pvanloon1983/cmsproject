<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;

Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendPasswordResetLink'])
    ->middleware(['guest', 'throttle:3,1'])
    ->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'handlingPasswordResetToken'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'changePasswordSubmit'])->middleware('guest')->name('password.update');