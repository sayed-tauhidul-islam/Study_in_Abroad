<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Degree;

class AddMoreDegreesSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info("📚 Adding more degrees to the database...\n");
        
        $newDegrees = [
            // Additional Undergraduate Degrees
            [
                'name' => 'Bachelor of Technology (BTech)',
                'level' => 'Undergraduate',
                'duration_years' => 4,
                'is_active' => true,
                'description' => 'A four-year undergraduate degree focusing on technology and applied sciences.'
            ],
            [
                'name' => 'Bachelor of Business Administration (BBA)',
                'level' => 'Undergraduate',
                'duration_years' => 3,
                'is_active' => true,
                'description' => 'A three-year undergraduate degree focusing on business administration and management.'
            ],
            [
                'name' => 'Bachelor of Computer Applications (BCA)',
                'level' => 'Undergraduate',
                'duration_years' => 3,
                'is_active' => true,
                'description' => 'A three-year undergraduate degree focusing on computer applications and software development.'
            ],
            [
                'name' => 'Bachelor of Fine Arts (BFA)',
                'level' => 'Undergraduate',
                'duration_years' => 4,
                'is_active' => true,
                'description' => 'A four-year undergraduate degree focusing on visual and performing arts.'
            ],
            [
                'name' => 'Bachelor of Architecture (BArch)',
                'level' => 'Undergraduate',
                'duration_years' => 5,
                'is_active' => true,
                'description' => 'A five-year undergraduate degree focusing on architectural design and construction.'
            ],
            [
                'name' => 'Bachelor of Laws (LLB)',
                'level' => 'Undergraduate',
                'duration_years' => 3,
                'is_active' => true,
                'description' => 'A three-year undergraduate degree in law and legal studies.'
            ],
            [
                'name' => 'Bachelor of Education (BEd)',
                'level' => 'Undergraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year undergraduate degree focusing on teaching and education.'
            ],
            [
                'name' => 'Bachelor of Pharmacy (BPharm)',
                'level' => 'Undergraduate',
                'duration_years' => 4,
                'is_active' => true,
                'description' => 'A four-year undergraduate degree focusing on pharmaceutical sciences.'
            ],
            [
                'name' => 'Bachelor of Nursing (BN/BSN)',
                'level' => 'Undergraduate',
                'duration_years' => 4,
                'is_active' => true,
                'description' => 'A four-year undergraduate degree in nursing and healthcare.'
            ],
            [
                'name' => 'Bachelor of Design (BDes)',
                'level' => 'Undergraduate',
                'duration_years' => 4,
                'is_active' => true,
                'description' => 'A four-year undergraduate degree focusing on design and creative arts.'
            ],
            [
                'name' => 'Bachelor of Social Work (BSW)',
                'level' => 'Undergraduate',
                'duration_years' => 3,
                'is_active' => true,
                'description' => 'A three-year undergraduate degree focusing on social work and community services.'
            ],
            [
                'name' => 'Bachelor of Journalism (BJ)',
                'level' => 'Undergraduate',
                'duration_years' => 3,
                'is_active' => true,
                'description' => 'A three-year undergraduate degree focusing on journalism and mass communication.'
            ],
            
            // Additional Postgraduate Degrees
            [
                'name' => 'Master of Computer Applications (MCA)',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year postgraduate degree focusing on advanced computer applications.'
            ],
            [
                'name' => 'Master of Commerce (MCom)',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year postgraduate degree focusing on commerce and business.'
            ],
            [
                'name' => 'Master of Philosophy (MPhil)',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year research-based postgraduate degree, often a stepping stone to PhD.'
            ],
            [
                'name' => 'Master of Engineering (MEng)',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year postgraduate degree focusing on advanced engineering.'
            ],
            [
                'name' => 'Master of Fine Arts (MFA)',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year postgraduate degree in fine and creative arts.'
            ],
            [
                'name' => 'Master of Laws (LLM)',
                'level' => 'Postgraduate',
                'duration_years' => 1,
                'is_active' => true,
                'description' => 'A one-year postgraduate degree in specialized legal studies.'
            ],
            [
                'name' => 'Master of Public Health (MPH)',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year postgraduate degree focusing on public health and epidemiology.'
            ],
            [
                'name' => 'Master of Social Work (MSW)',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year postgraduate degree in advanced social work practices.'
            ],
            [
                'name' => 'Master of Architecture (MArch)',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year postgraduate degree in advanced architectural studies.'
            ],
            [
                'name' => 'Master of Education (MEd)',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year postgraduate degree focusing on educational leadership and pedagogy.'
            ],
            [
                'name' => 'Executive MBA (EMBA)',
                'level' => 'Postgraduate',
                'duration_years' => 1,
                'is_active' => true,
                'description' => 'A one to two-year executive-level MBA program for experienced professionals.'
            ],
            [
                'name' => 'Master of Data Science (MDS)',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year postgraduate degree focusing on data analytics and machine learning.'
            ],
            [
                'name' => 'Master of Public Administration (MPA)',
                'level' => 'Postgraduate',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year postgraduate degree in public sector management and policy.'
            ],
            
            // Additional Doctoral Degrees
            [
                'name' => 'Doctor of Medicine (MD)',
                'level' => 'Doctoral',
                'duration_years' => 4,
                'is_active' => true,
                'description' => 'A four-year doctoral degree in medicine and clinical practice.'
            ],
            [
                'name' => 'Doctor of Business Administration (DBA)',
                'level' => 'Doctoral',
                'duration_years' => 4,
                'is_active' => true,
                'description' => 'A four-year professional doctoral degree in business administration.'
            ],
            [
                'name' => 'Doctor of Education (EdD)',
                'level' => 'Doctoral',
                'duration_years' => 4,
                'is_active' => true,
                'description' => 'A four-year professional doctoral degree in educational leadership.'
            ],
            [
                'name' => 'Doctor of Engineering (DEng)',
                'level' => 'Doctoral',
                'duration_years' => 4,
                'is_active' => true,
                'description' => 'A four-year professional doctoral degree in engineering.'
            ],
            [
                'name' => 'Doctor of Science (DSc)',
                'level' => 'Doctoral',
                'duration_years' => 3,
                'is_active' => true,
                'description' => 'A three to five-year doctoral degree in scientific research.'
            ],
            [
                'name' => 'Doctor of Pharmacy (PharmD)',
                'level' => 'Doctoral',
                'duration_years' => 4,
                'is_active' => true,
                'description' => 'A four-year professional doctoral degree in pharmacy practice.'
            ],
            [
                'name' => 'Doctor of Juridical Science (SJD)',
                'level' => 'Doctoral',
                'duration_years' => 3,
                'is_active' => true,
                'description' => 'A three-year research doctoral degree in law.'
            ],
            
            // Certificate and Diploma Programs
            [
                'name' => 'Professional Certificate',
                'level' => 'Certificate',
                'duration_years' => 1,
                'is_active' => true,
                'description' => 'A short-term professional certification program (6 months to 1 year).'
            ],
            [
                'name' => 'Advanced Diploma',
                'level' => 'Diploma',
                'duration_years' => 2,
                'is_active' => true,
                'description' => 'A two-year advanced diploma program with specialized training.'
            ],
            [
                'name' => 'Postgraduate Diploma',
                'level' => 'Postgraduate',
                'duration_years' => 1,
                'is_active' => true,
                'description' => 'A one-year postgraduate diploma program.'
            ],
            [
                'name' => 'Graduate Certificate',
                'level' => 'Postgraduate',
                'duration_years' => 1,
                'is_active' => true,
                'description' => 'A one-year graduate-level certificate program.'
            ],
            [
                'name' => 'Foundation Program',
                'level' => 'Pre-Undergraduate',
                'duration_years' => 1,
                'is_active' => true,
                'description' => 'A one-year preparatory program for undergraduate studies.'
            ],
        ];
        
        $added = 0;
        $skipped = 0;
        
        foreach ($newDegrees as $degreeData) {
            // Check if degree already exists
            $exists = Degree::where('name', $degreeData['name'])->exists();
            
            if (!$exists) {
                Degree::create($degreeData);
                $this->command->info("✓ Added: {$degreeData['name']}");
                $added++;
            } else {
                $this->command->warn("⊘ Skipped (already exists): {$degreeData['name']}");
                $skipped++;
            }
        }
        
        $this->command->info("\n📊 Summary:");
        $this->command->info("   Degrees added: {$added}");
        $this->command->info("   Degrees skipped: {$skipped}");
        $this->command->info("   Total degrees now: " . Degree::count());
        
        // Show breakdown by level
        $this->command->info("\n📈 Breakdown by Level:");
        $levels = Degree::select('level')->distinct()->get();
        foreach ($levels as $level) {
            $count = Degree::where('level', $level->level)->count();
            $this->command->info("   {$level->level}: {$count} degrees");
        }
    }
}
