<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Examination Application with Face & Voice Authentication',
            'description' => null,
            'tech_stack' => 'Django, Python',
            'image' => null,
            'demo_url' => null,
            'repo_url' => null,
        ]);

        Project::create([
            'title' => 'Startnews: Gaming News Website',
            'description' => null,
            'tech_stack' => 'Laravel',
            'image' => null,
            'demo_url' => null,
            'repo_url' => null,
        ]);

        Project::create([
            'title' => 'Restaurant App: Mobile Restaurant Application',
            'description' => null,
            'tech_stack' => 'Flutter',
            'image' => null,
            'demo_url' => null,
            'repo_url' => null,
        ]);
    }
}