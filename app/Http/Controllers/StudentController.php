<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function inicio()
    {
        $student = Student::where("avg", 9.99)->get("name");
        return view("welcome", ["student" => $student]);
    }
}
