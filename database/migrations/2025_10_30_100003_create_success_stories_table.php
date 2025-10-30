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
        Schema::create('success_stories', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_image_url');
            $table->string('university_name');
            $table->string('program_name');
            $table->string('country');
            $table->string('campus_image_url');
            $table->string('achievement_badge');
            $table->text('quote_text');
            $table->text('secondary_quote')->nullable();
            $table->decimal('rating', 2, 1)->default(5.0);
            $table->json('badges')->nullable();
            $table->string('gradient_from')->default('blue-400');
            $table->string('gradient_to')->default('blue-600');
            $table->integer('display_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('success_stories');
    }
};
