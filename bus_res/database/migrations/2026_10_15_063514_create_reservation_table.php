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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id("reservation_id")->primary();
            $table->foreignId("schedule_id")->constrained("schedules","schedule_id");
            $table->string("passenger_name");
            $table->integer("contact_information");
            $table->string("seat_number");
            $table->string("status");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
