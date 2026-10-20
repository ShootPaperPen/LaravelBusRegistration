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
        Schema::create('buses', function (Blueprint $table) {
            $table->id("bus_id")->primary();
            $table->integer("bus_number")->unique();
            $table->integer("seating_capacity");
            $table->string("driver_name");
            $table->string("departure_location");
            $table->string("destination");
            $table->string("contact_number");
            $table->dateTime("departure_time");
            $table->dateTime("arrival_time");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
