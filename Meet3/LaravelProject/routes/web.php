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
    $locations = ['anggrek', 'syahdan', 'bandung'];
    return view('admin.campus', ['locations' => $locations]);
})->name('campus');

Route::get('campus/{campus}/students', function ($campus) {
    $students = [
        'anggrek' => [
            ['nim' => '1', 'name' => 'student anggrek 1'],
            ['nim' => '2', 'name' => 'student anggrek 2'],
        ],
        'syahdan' => [
            ['nim' => '3', 'name' => 'student syahdan 1'],
            ['nim' => '4', 'name' => 'student syahdan 2'],
        ],
        'bandung' => [
            ['nim' => '5', 'name' => 'student bandung 1'],
            ['nim' => '6', 'name' => 'student bandung 2'],
        ],
    ];

    if (!array_key_exists($campus, $students)) {
        abort(404, 'Campus not found');
    }

    return view('admin.student', ['campus' => $campus, 'students' => $students[$campus]]);
})->name('campus.student');
