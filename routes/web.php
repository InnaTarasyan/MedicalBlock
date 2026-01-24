<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

// Legal Pages
Route::get('/privacy-policy', function () {
    return view('legal.privacy-policy');
})->name('legal.privacy');

Route::get('/terms-of-use', function () {
    return view('legal.terms-of-use');
})->name('legal.terms');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Form (rate limited: 5 requests per minute per IP)
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

// Blog
Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/topics', [BlogController::class, 'topics'])->name('blog.topics');
Route::get('/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/authors/{doctor}', [BlogController::class, 'author'])->name('blog.author');