<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'position' => 'Software Developer',
            'company' => 'SEAMEO SEAMOLEC',
            'start_date' => '2025-11-01',
            'end_date' => null,
            'description' => '- Improved S3 compatible object storage for managing certificate assets.\n- Implemented dynamic certificate templating system with role-based access control (RBAC).\n- Applied cryptographic techniques using Ed25519 and RSA for secure data signing and verification.\n- Utilized RabbitMQ for asynchronous task processing and queue management.\n- Built scalable backend services and dynamic templating using Bun, Hono, Drizzle ORM, Scalar, and PostgreSQL with a feature-based architecture.\n- Contributed to the development of SEAMOLEC e-training platform, including documentation planning and system design.\n- Currently implementing Single Sign-On (SSO) integration using Authentik to centralize authentication and improve security.',
        ]);

        Experience::create([
            'position' => 'IT Staff Intern',
            'company' => 'PT. Jakarta Tollroad Development',
            'start_date' => '2024-08-01',
            'end_date' => '2024-10-31',
            'description' => '- Developed a field reporting application using Laravel to streamline data collection, improve reporting efficiency, and support real-time operational monitoring.\n- Conducted analysis of IoT-based toll road automation and control systems, gaining insights into system integration, data flow, and smart infrastructure implementation.\n- Observed and analyzed toll road operations at the Toll Operation Center (TOC), identifying workflows and system processes to better understand large-scale traffic management systems.',
        ]);

        Experience::create([
            'position' => 'Laboratory Informatics Assistant',
            'company' => 'Informatics Laboratory',
            'start_date' => '2022-01-01',
            'end_date' => '2023-12-31',
            'description' => '- Conducted systematic inspections of computer systems before and after classes to ensure optimal performance and readiness.\n- Modified, analyzed, and resolved hardware malfunctions, improving system reliability and reducing downtime.\n- Managed Ethernet cable installation and repair, ensuring consistent and high-quality network connectivity.',
        ]);
    }
}