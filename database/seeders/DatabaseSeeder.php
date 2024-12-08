<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Insert Students
        $student1 = Student::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'dob' => '2000-01-01',
        ]);

        $student2 = Student::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'dob' => '2000-02-01',
        ]);

        // Insert Courses
        $course1 = Course::create([
            'name' => 'Mathematics',
            'code' => 'MATH101',
            'credits' => 3,
        ]);

        $course2 = Course::create([
            'name' => 'Physics',
            'code' => 'PHYS101',
            'credits' => 3,
        ]);

        // Attach Students to Courses (Many-to-Many Relationship)
        $student1->courses()->attach($course1->id); // John Doe enrolled in Mathematics
        $student1->courses()->attach($course2->id); // John Doe enrolled in Physics

        $student2->courses()->attach($course1->id); // Jane Smith enrolled in Mathematics
    }
}
