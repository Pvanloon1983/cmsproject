<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

Route::get('/contact', [ContactFormController::class, 'index'])->name('contact');
Route::post('/contact', [ContactFormController::class, 'submitForm'])->middleware(['throttle:6,1'])->name('contact.submit');