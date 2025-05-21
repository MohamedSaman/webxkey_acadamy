<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    public function run()
    {
        // First create a sample course
        $course = Course::firstOrCreate(
            ['code' => 'CS101'],
            [
                'name' => 'Computer Science',
                'description' => 'Bachelor of Science in Computer Science',
                'duration_months' => 48,
                'fee' => 15000.00,
                'status' => 'active'
            ]
        );

        // Create sample students
        $students = [
            [
                'student_id' => 'STU20230001',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password123'),
                'phone' => '1234567890',
                'address' => '123 Main St, Anytown',
                'date_of_birth' => Carbon::parse('2000-05-15'),
                'gender' => 'male',
                'nationality' => 'American',
                'identification_number' => 'ID12345678',
                'course_id' => $course->id,
                'enrollment_date' => Carbon::parse('2023-09-01'),
                'current_semester' => '3',
                'status' => 'active',
                'guardian_name' => 'Jane Doe',
                'guardian_phone' => '0987654321',
                'guardian_relationship' => 'Mother'
            ],
            [
                'student_id' => 'STU20230002',
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password123'),
                'phone' => '2345678901',
                'address' => '456 Oak Ave, Somewhere',
                'date_of_birth' => Carbon::parse('2001-02-20'),
                'gender' => 'female',
                'nationality' => 'Canadian',
                'identification_number' => 'ID87654321',
                'course_id' => $course->id,
                'enrollment_date' => Carbon::parse('2023-09-01'),
                'graduation_date' => null,
                'current_semester' => '2',
                'status' => 'active',
                'profile_image' => null,
                'notes' => 'Honors student'
            ]
        ];

        foreach ($students as $studentData) {
            Student::create($studentData);
        }

        // You can also use factory if you want more random data
        // \App\Models\Student::factory(50)->create();
    }
}