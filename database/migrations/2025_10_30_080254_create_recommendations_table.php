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
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_preference_id')->constrained()->onDelete('cascade');
            $table->json('recommended_universities')->nullable();
            $table->json('recommended_countries')->nullable();
            $table->json('recommended_courses')->nullable();
            $table->json('recommended_degrees')->nullable();
            $table->json('scholarship_options')->nullable();
            $table->json('cost_breakdown')->nullable();
            $table->json('work_opportunities')->nullable();
            $table->integer('match_score')->default(0);
            $table->text('summary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
