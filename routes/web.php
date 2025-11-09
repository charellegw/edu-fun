<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WritersController;

// Redirect '/' ke home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Writers page
Route::get('/writers', [WritersController::class, 'index'])->name('writers');
Route::get('/writers/{id}', [WritersController::class, 'show'])->name('writers.show');

// Single post
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

// Category detail
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

// About page
Route::view('/about', 'pages.about')->name('about');

// Popular
Route::get('/popular', [PageController::class, 'popular'])->name('popular');