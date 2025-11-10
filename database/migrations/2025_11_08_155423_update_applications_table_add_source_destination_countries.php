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
            // Add new columns for source and destination countries
            $table->unsignedBigInteger('source_country')->nullable()->after('phone');
            $table->unsignedBigInteger('destination_country')->nullable()->after('source_country');
            
            // Add foreign key constraints
            $table->foreign('source_country')->references('id')->on('countries')->onDelete('set null');
            $table->foreign('destination_country')->references('id')->on('countries')->onDelete('set null');
            
            // Drop old country column if it exists
            $table->dropColumn('country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            // Drop foreign keys and new columns
            $table->dropForeign(['source_country']);
            $table->dropForeign(['destination_country']);
            $table->dropColumn(['source_country', 'destination_country']);
            
            // Restore old country column
            $table->string('country')->nullable();
        });
    }
};
