<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campus;
use Illuminate\Support\Facades\DB;

class CampusController extends Controller
{
    //
    public function home(){
        $campuses = Campus::all();
        //$campuses = DB::select('select * from campuses');
        //$campuses = DB::table('campuses')->get();

        return view('admin.campus',['campuses'=>$campuses]);
    }

    public function showStudent(Campus $campus){
        $students = $campus->students()->paginate(3);
        return view('admin.student',['campus'=>$campus,'students'=>$students]);
    }
}
