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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('country_name');
            $table->string('flag_emoji');
            $table->text('description');
            $table->integer('total_universities')->default(0);
            $table->string('gradient_from')->default('blue-400');
            $table->string('gradient_to')->default('blue-600');
            $table->string('badge_text');
            $table->string('badge_color')->default('blue-100');
            $table->string('badge_text_color')->default('blue-600');
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
        Schema::dropIfExists('destinations');
    }
};
