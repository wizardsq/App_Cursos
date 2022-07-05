<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\instructor\courseController;
use App\Http\Livewire\Instructor\CoursesCurriculum;
use App\Http\Livewire\Instructor\CoursesStudents;
//Url
Route::redirect('', 'instructor/courses');

//Rutas

Route::resource('courses', CourseController::class)->names('courses');

Route::get('courses/{course}/curriculum', CoursesCurriculum::class)->name('courses.curriculum');

Route::get('courses/{course}/goals', [CourseController::class, 'goals'])->name('courses.goals');

Route::get('courses/{course}/students', CoursesStudents::class)->name('courses.students');

Route::post('courses/{course}/status', [CourseController::class, 'status'])->name('courses.status');
    