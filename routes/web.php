<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/writers', function () {
    return view('pages.writers');
})->name('writers');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

use App\Http\Controllers\WritersController;

Route::get('/writers', [WritersController::class, 'index'])->name('writers');
