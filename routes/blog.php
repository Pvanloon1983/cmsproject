<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\FrontBlogPostController;

// Front page
Route::get('/blog', [FrontBlogPostController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [FrontBlogPostController::class, 'show'])->name('blog.show');

// Dashboard
Route::get('dashboard/blog/create', [BlogPostController::class, 'create'])->name('blog.create');