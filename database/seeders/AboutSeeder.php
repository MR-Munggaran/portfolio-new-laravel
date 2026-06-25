<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'MUHAMMAD RAFI MUNGGARAN',
            'description' => 'A Bachelor of Computer Science graduate from Universitas Pembangunan Jaya with a strong interest in web development, Internet of Things (IoT), artificial intelligence, and mobile application development. Proficient in technologies such as Laravel, React.js, and Flutter, with basic knowledge of Kotlin for Android development. Highly motivated to learn new skills, able to work collaboratively in a team, and capable of solving problems independently and effectively.',
            'photo' => null,
        ]);
    }
}