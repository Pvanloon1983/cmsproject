<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('profile.edit');
Route::put('/dashboard/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('profile.update');