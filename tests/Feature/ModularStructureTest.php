<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModularStructureTest extends TestCase
{
    use RefreshDatabase;

    public function test_students_module_route_displays_student_data(): void
    {
        $this->withoutVite();

        Student::create([
            'student_no' => '2026-001',
            'first_name' => 'Danilo',
            'last_name' => 'Dumagat',
            'email' => 'danilo@example.com',
            'course' => 'BSIT',
        ]);

        $response = $this->get('/students');

        $response->assertStatus(200);
        $response->assertSee('Student List');
        $response->assertSee('2026-001');
        $response->assertSee('Danilo');
        $response->assertSee('Dumagat');
        $response->assertSee('BSIT');
    }

    public function test_courses_module_route_displays_course_data(): void
    {
        $this->withoutVite();

        Course::create([
            'course_code' => 'IT312L',
            'course_name' => 'System Integration and Architecture 2',
            'description' => 'Laravel modular architecture laboratory',
        ]);

        Course::create([
            'course_code' => 'IT311',
            'course_name' => 'Application Development',
            'description' => 'Core application development course',
        ]);

        $response = $this->get('/courses');

        $response->assertStatus(200);
        $response->assertSee('Course List');
        $response->assertSee('IT311');
        $response->assertSee('Application Development');
        $response->assertSee('IT312L');
        $response->assertSee('System Integration and Architecture 2');
    }
}
