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
        Schema::create('university_rankings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')->constrained()->onDelete('cascade');
            $table->integer('rank_number');
            $table->string('ranking_org')->default('QS World');
            $table->integer('year')->default(2025);
            $table->string('campus_image_url');
            $table->string('logo_url');
            $table->string('badge_text');
            $table->string('badge_color')->default('blue-500');
            $table->string('border_color')->default('blue-500');
            $table->boolean('is_featured')->default(false);
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_rankings');
    }
};
