<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontBlogPostController;

Route::get('/blog', [FrontBlogPostController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [FrontBlogPostController::class, 'show'])->name('blogshow');