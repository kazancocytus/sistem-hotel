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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->integer('no_reservation')->index();
            $table->string('name');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->enum('type_room', ['Suite', 'Standar', 'Deluxe']);
            $table->integer('number_room')->index();
            $table->decimal('price', 10, 2);
            $table->string('image');
            $table->enum('status', ['Confirmed', 'Not yet']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
