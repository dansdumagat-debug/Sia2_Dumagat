<?php

use App\Modules\Students\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');
