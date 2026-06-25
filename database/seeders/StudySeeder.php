<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Study;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Study::create([
            'institution' => 'Universitas Pembangunan Jaya',
            'major' => 'Computer Science',
            'degree' => 'S1',
            'start_date' => '2021-08-01',
            'end_date' => '2025-07-31',
            'description' => 'Bachelor of Computer Science with GPA 3.54/4.00',
        ]);
    }
}