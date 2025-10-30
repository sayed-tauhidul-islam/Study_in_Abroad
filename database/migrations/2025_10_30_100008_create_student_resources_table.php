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
        Schema::create('student_resources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('icon')->default('📖');
            $table->text('description');
            $table->string('button_text');
            $table->string('button_link');
            $table->string('border_color')->default('blue-500');
            $table->string('button_color')->default('green-700');
            $table->string('text_color')->default('blue-700');
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
        Schema::dropIfExists('student_resources');
    }
};
