<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function listStudent()
    {
        $students = Student::all();   
          
        return view('welcome', compact('students'));
    }
}
