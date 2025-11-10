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
        Schema::table('applications', function (Blueprint $table) {
            $table->date('date_of_birth')->nullable()->after('email');
            $table->enum('gender', ['male', 'female', 'other'])->nullable()->after('date_of_birth');
            $table->text('address')->nullable()->after('phone');
            $table->string('passport_number', 20)->nullable()->after('address');
            $table->string('education_level', 50)->nullable()->after('passport_number');
            $table->string('english_proficiency', 50)->nullable()->after('education_level');
            $table->string('test_score', 10)->nullable()->after('english_proficiency');
            $table->string('intended_program', 50)->nullable()->after('destination_country');
            $table->string('intake_year', 4)->nullable()->after('intended_program');
            $table->string('intake_month', 20)->nullable()->after('intake_year');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn([
                'date_of_birth',
                'gender',
                'address',
                'passport_number',
                'education_level',
                'english_proficiency',
                'test_score',
                'intended_program',
                'intake_year',
                'intake_month'
            ]);
        });
    }
};
