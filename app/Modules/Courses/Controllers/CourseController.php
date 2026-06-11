<?php

namespace App\Modules\Courses\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('course_code')->get();

        return view('courses.index', compact('courses'));
    }
}
