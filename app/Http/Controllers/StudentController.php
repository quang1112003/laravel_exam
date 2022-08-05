<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all() {
        $students = Student::all();
        return view("students.list-students",[
            "students"=>$students
        ]);
    }

}
