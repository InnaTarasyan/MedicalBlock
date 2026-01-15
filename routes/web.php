<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Blog
Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/topics', [BlogController::class, 'topics'])->name('blog.topics');
Route::get('/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/authors/{doctor}', [BlogController::class, 'author'])->name('blog.author');