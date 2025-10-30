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
        Schema::table('courses', function (Blueprint $table) {
            $table->string('duration')->nullable(); // e.g., "4 years", "2 semesters"
            $table->string('level')->nullable(); // e.g., "Bachelor", "Master", "PhD"
            $table->decimal('tuition_fee', 10, 2)->nullable();
            $table->decimal('application_fee', 10, 2)->nullable();
            $table->string('language')->default('English');
            $table->text('requirements')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['duration', 'level', 'tuition_fee', 'application_fee', 'language', 'requirements']);
        });
    }
};
