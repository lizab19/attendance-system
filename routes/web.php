<?php

use Illuminate\Support\Facades\Route;

// Import controllers at the top of the file
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;

// Default route pointing to the welcome view
Route::get('/', function () {
    return view('welcome');
});

// Route for displaying all students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Route for displaying all courses
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

// Route for showing a single student
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

// Route for creating a new student (POST request)
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// Group routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Dashboard route for authenticated users
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
