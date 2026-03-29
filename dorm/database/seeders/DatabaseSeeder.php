<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Room;
use App\Models\Allocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Create sample students
        Student::create([
            'student_number' => 'S001',
            'course' => 'Bachelor of Science in Computer Science',
            'year_level' => '1'
        ]);
        
        Student::create([
            'student_number' => 'S002',
            'course' => 'Bachelor of Science in Computer Science',
            'year_level' => '2'
        ]);
        
        Student::create([
            'student_number' => 'S003',
            'course' => 'Bachelor of Science in Information Technology',
            'year_level' => '1'
        ]);
        
        Student::create([
            'student_number' => 'S004',
            'course' => 'Bachelor of Science in Business Administration',
            'year_level' => '3'
        ]);
        
        Student::create([
            'student_number' => 'S005',
            'course' => 'Bachelor of Science in Computer Science',
            'year_level' => '2'
        ]);

        // Create sample rooms
        Room::create([
            'room_number' => '101',
            'capacity' => 2,
            'available_slots' => 1
        ]);
        
        Room::create([
            'room_number' => '102',
            'capacity' => 2,
            'available_slots' => 2
        ]);
        
        Room::create([
            'room_number' => '201',
            'capacity' => 3,
            'available_slots' => 2
        ]);
        
        Room::create([
            'room_number' => '202',
            'capacity' => 2,
            'available_slots' => 0
        ]);
        
        Room::create([
            'room_number' => '301',
            'capacity' => 3,
            'available_slots' => 3
        ]);

        // Create sample allocations
        Allocation::create([
            'student_id' => 1,
            'room_id' => 1,
            'date_assigned' => '2024-01-15',
            'status' => 'active'
        ]);
        
        Allocation::create([
            'student_id' => 2,
            'room_id' => 2,
            'date_assigned' => '2024-01-16',
            'status' => 'active'
        ]);
        
        Allocation::create([
            'student_id' => 3,
            'room_id' => 2,
            'date_assigned' => '2024-01-17',
            'status' => 'active'
        ]);
        
        Allocation::create([
            'student_id' => 4,
            'room_id' => 3,
            'date_assigned' => '2024-02-01',
            'status' => 'active'
        ]);
        
        Allocation::create([
            'student_id' => 5,
            'room_id' => 3,
            'date_assigned' => '2024-02-05',
            'status' => 'inactive'
        ]);
    }
}