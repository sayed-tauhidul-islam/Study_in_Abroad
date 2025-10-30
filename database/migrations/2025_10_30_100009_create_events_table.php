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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_title');
            $table->dateTime('event_date');
            $table->enum('event_type', ['webinar', 'workshop', 'fair', 'info_session'])->default('webinar');
            $table->text('description');
            $table->string('image_url')->nullable();
            $table->string('location')->nullable();
            $table->string('registration_link')->nullable();
            $table->integer('seats_available')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
