<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Legal Pages
Route::get('/privacy-policy', function () {
    return view('legal.privacy-policy');
})->name('legal.privacy');

Route::get('/terms-of-use', function () {
    return view('legal.terms-of-use');
})->name('legal.terms');

// Blog
Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/topics', [BlogController::class, 'topics'])->name('blog.topics');
Route::get('/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/authors/{doctor}', [BlogController::class, 'author'])->name('blog.author');