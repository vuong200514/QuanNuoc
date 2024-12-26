<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
        [
            'studentFullName' => 'Nguyen Thi Minh',
            'studentIDNumber' => 'PKA983332',
        ],
        [
            'studentFullName' => 'Nguyen Van Hung',
            'studentIDNumber' => 'PKA23883',
        ],
        [
            'studentFullName' => 'Tran Van Huy',
            'studentIDNumber' => 'PKA13883',
        ],
    ]);

    }
}
