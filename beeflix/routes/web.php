<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'viewHomePage'])->name('homePage.view');
Route::get('/add-movie', [MovieController::class, 'viewAddMoviePage'])->name('addMoviePage.view');
Route::post('/movie/create', [MovieController::class, 'addNewMovie'])->name('addMoviePage.addNewMovie');
Route::get('/movie/delete/{movie_id}', [MovieController::class, 'deleteMovie'])->name('homePage.deleteMovie');