<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Campus;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function create(){
        $campuses = Campus::all();
        return view('student.create', ['campuses'=>$campuses]);
    }

    public function store(Request $request){
        //validate
        $validated = $request->validate([
            'nim' => 'required|max:10',
            'name' => 'required|max:5',
            'campus' => 'required'
        ]);

        //make student object
        $student = new Student();
        $student->nim = $request->nim;
        $student->name = $request->name;
        $student->campus_id = $request->campus;
        $student->photo = '1.png';
        $student->save();
        
        return redirect()->back()->with('success', true);
    }
}
