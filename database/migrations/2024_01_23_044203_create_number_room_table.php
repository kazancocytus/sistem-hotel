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
        Schema::create('number_room', function (Blueprint $table) {
            $table->id('id_number_room');
            $table->integer('number_room')->index();
            $table->string('type_room')->enum('Deluxe', 'Suite', 'Standar');
            $table->decimal('price', 10, 2);
            $table->string('status')->enum('Available', 'not Available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('number_room');
    }
};
