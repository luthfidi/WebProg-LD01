<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/{genre_id?}', [BookController::class, 'bookList'])->name('book.index');
Route::get('/bookdetail/{book}', [BookController::class, 'bookDetail'])->name('book.detail');
