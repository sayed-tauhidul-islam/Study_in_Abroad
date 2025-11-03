<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Degree;

class ShowDegreesSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info("📚 Degrees in Database:\n");
        
        $degrees = Degree::all();
        
        if ($degrees->count() === 0) {
            $this->command->warn("No degrees found in the database!");
            return;
        }
        
        foreach ($degrees as $degree) {
            $this->command->info("ID: {$degree->id}");
            $this->command->info("   Name: {$degree->name}");
            $this->command->info("   Level: " . ($degree->level ?? 'N/A'));
            $this->command->info("   Duration: " . ($degree->duration_years ?? 'N/A') . " years");
            $this->command->info("   Active: " . ($degree->is_active ? 'Yes' : 'No'));
            if ($degree->description) {
                $this->command->info("   Description: {$degree->description}");
            }
            $this->command->line("");
        }
        
        $this->command->info("📊 Total Degrees: " . $degrees->count());
        $this->command->info("   Active: " . $degrees->where('is_active', true)->count());
        $this->command->info("   Inactive: " . $degrees->where('is_active', false)->count());
    }
}
