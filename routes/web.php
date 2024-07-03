<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/page/{slug}', [PageController::class, 'show']);
Route::get('/', [HomeController::class, 'index']);