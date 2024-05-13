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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('travel_company', 25);
            $table->string('departure_station', 25);
            $table->string('arrival_station', 25);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_number', 10);
            $table->tinyInteger('wagon_number');
            $table->boolean('in_time')->default();
            $table->boolean('is_cancelled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
