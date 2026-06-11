<?php

use App\Modules\Courses\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/courses', [CourseController::class, 'index'])
    ->name('courses.index');
