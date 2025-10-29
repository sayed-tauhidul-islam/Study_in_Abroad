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
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('subtitle');
            $table->string('highlight_text')->nullable();
            $table->string('highlight_color')->default('#10b981');
            $table->string('cta_text')->default('Apply Now');
            $table->string('cta_link')->default('/applications/create');
            $table->string('search_placeholder')->default('Search universities...');
            $table->string('background_color')->default('#eff6ff');
            $table->json('carousel_images')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};
