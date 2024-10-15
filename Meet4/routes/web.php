<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampusController;

Route::get('/',function(){
    $campuses = ['kemanggisan','malang','bandung'];
    return view('admin.campus',['campuses'=>$campuses]);
})->name('campus');

Route::get('campus/{campus}/students',function($campus){
    $student_kmg = [
        [
            'nim'=>'1',
            'name'=>'student kemanggisan 1'
        ],
        [
            'nim'=>'2',
            'name'=>'student kemanggisan 2'
        ],
    ];

    $student_alt = [
        [
            'nim'=>'3',
            'name'=>'student alam sutera 3'
        ],
        [
            'nim'=>'4',
            'name'=>'student alam sutera 4'
        ],
    ];

    $student_bdg = [
        [
            'nim'=>'5',
            'name'=>'student bandung 5'
        ],
        [
            'nim'=>'6',
            'name'=>'student bandung 6'
        ],
    ];

    $students = [
        'kemanggisan' => $student_kmg,
        'malang' =>$student_alt,
        'bandung'=>$student_bdg,
    ];

    //dd($students[$campus]);
    return view('admin.student',['campus'=>$campus,'students'=>$students[$campus]]);

})->name('campus.student');
