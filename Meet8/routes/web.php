<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\StudentController;

Route::get('/',[CampusController::class,'home'])->name('campus');
Route::get('campus/{campus}/students',[CampusController::class,'showStudent'])->name('campus.student');
Route::get('student/create', [studentController::class, 'create'])->name('student.create');
Route::post('student/store', [StudentController::class, 'store'])->name('student.store');