<?php

namespace App\Modules\Students\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('student_no')->get();

        return view('students.index', compact('students'));
    }
}
