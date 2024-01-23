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
            $table->date('check_in');
            $table->date('check_out');
            $table->string('type_room')->enum('Deluxe', 'Suite', 'Standar');
            $table->integer('number_room')->index();
            $table->decimal('price', 10, 2);
            $table->string('image');
            $table->string('status')->enum('Confirmed', 'Not yet Confirmed');
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
