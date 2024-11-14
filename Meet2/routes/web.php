<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('student.course.index', ['student_id' => 1]);
});

Route::prefix('student')->name('student.')->group(function(){
    Route::get('{student_id}', function ($student_id) {
        echo '<h1> HALAMAN STUDENT DENGAN ID : '.$student_id.'</h1>';
    })->name('index');
    
    Route::get('{student_id}/course', function ($student_id) {
        echo '<h1> HALAMAN STUDENT DENGAN ID : '.$student_id.'</h1>';
    
        for ($course=1; $course<5 ; $course++) {
            echo '<h4>COURSE ID : '.$course.' </h4>';
        }
    }) ->name('course');
    
    Route::get('{student_id}/course/{course_id?}', function ($student_id, $course_id=-1) {
        echo '<h1> STUDENT DENGAN ID: '.$student_id.' HALAMAN COURSE ID: '.$course_id.'</h1>';
    }) ->name('course.index');
});

/*
1. POST : store
2. GET : get data
3. PUT : update keseluruhan data
4. PATCH : update sebagian data
5. DELETE : untuk hapus data

*/