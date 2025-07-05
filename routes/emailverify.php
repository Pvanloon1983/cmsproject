<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailVerificationController;

Route::get('/email/verify', [EmailVerificationController::class, 'emailVerificationNotice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'emailVerificationHandler'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [EmailVerificationController::class, 'emailResendHandler'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');