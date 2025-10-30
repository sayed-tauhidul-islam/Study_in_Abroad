<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_preferences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('current_education_level');
            $table->string('field_of_interest');
            $table->json('preferred_countries')->nullable();
            $table->json('preferred_degrees')->nullable();
            $table->decimal('budget_min', 10, 2)->nullable();
            $table->decimal('budget_max', 10, 2)->nullable();
            $table->string('study_mode')->nullable(); // full-time, part-time, online
            $table->boolean('scholarship_required')->default(false);
            $table->string('english_proficiency')->nullable();
            $table->decimal('gpa_score', 3, 2)->nullable();
            $table->text('work_experience')->nullable();
            $table->json('preferred_courses')->nullable();
            $table->string('intake_preference')->nullable(); // Fall, Spring, Summer
            $table->text('additional_requirements')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_preferences');
    }
};
