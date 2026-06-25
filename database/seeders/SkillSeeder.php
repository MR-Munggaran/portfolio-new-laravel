<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'name' => 'Javascript',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'HTML',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Tailwind',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'React js',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Node js',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Django',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Flask',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Express js',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Hono',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Laravel',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Kotlin',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Flutter',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'MongoDB',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
                Skill::create([
            'name' => 'PostgreSQL',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
                Skill::create([
            'name' => 'MySQL',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Notion',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Google Workspace',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Microsoft Office',
            'category' => 'Hard Skill',
            'icon' => null,
        ]);

        // Soft Skills
        Skill::create([
            'name' => 'Critical Thinking',
            'category' => 'Soft Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Problem Solving',
            'category' => 'Soft Skill',
            'icon' => null,
        ]);
        Skill::create([
            'name' => 'Time Management',
            'category' => 'Soft Skill',
            'icon' => null,
        ]);
    }
}