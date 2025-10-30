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
        Schema::table('countries', function (Blueprint $table) {
            $table->string('image_url')->nullable()->after('country_code');
            $table->string('capital')->nullable()->after('image_url');
            $table->string('currency')->nullable()->after('capital');
            $table->string('language')->nullable()->after('currency');
            $table->decimal('tuition_range_min', 10, 2)->nullable()->after('language');
            $table->decimal('tuition_range_max', 10, 2)->nullable()->after('tuition_range_min');
            $table->decimal('living_cost_min', 10, 2)->nullable()->after('tuition_range_max');
            $table->decimal('living_cost_max', 10, 2)->nullable()->after('living_cost_min');
            $table->text('visa_info')->nullable()->after('living_cost_max');
            $table->text('work_opportunities')->nullable()->after('visa_info');
            $table->integer('universities_count')->default(0)->after('work_opportunities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->dropColumn([
                'image_url',
                'capital',
                'currency',
                'language',
                'tuition_range_min',
                'tuition_range_max',
                'living_cost_min',
                'living_cost_max',
                'visa_info',
                'work_opportunities',
                'universities_count'
            ]);
        });
    }
};
