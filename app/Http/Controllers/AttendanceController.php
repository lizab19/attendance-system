<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    // Display all attendance records
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendances.index', compact('attendances'));
    }

    // Show the form to create a new attendance record
    public function create()
    {
        $students = Student::all(); // Get all students
        $courses = Course::all(); // Get all courses
        return view('attendances.create', compact('students', 'courses'));
    }

    // Store the new attendance record
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'attendance_date' => 'required|date',
            'status' => 'required|in:present,absent,late',
        ]);

        // Create the attendance record
        Attendance::create([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'attendance_date' => $request->attendance_date,
            'status' => $request->status,
        ]);

        // Redirect to the attendance index page
        return redirect()->route('attendances.index')->with('success', 'Attendance recorded successfully.');
    }
}
