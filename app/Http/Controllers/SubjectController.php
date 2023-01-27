<?php

namespace App\Http\Controllers;

use App\Models\Subject;


class SubjectController extends Controller
{
    public function inicio()
    {
        
        $subject = Subject::where("hours", ">", 40)->get("name");
        return view("subject", ["subject" => $subject]);
    }
}
