<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/', [CategoryController::class, 'index']);

Route::resource('categories', CategoryController::class);
Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
