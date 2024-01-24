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
        Schema::create('costumer', function (Blueprint $table) {
            $table->id('id_costumer');
            $table->string('name');
            $table->integer('phone');
            $table->string('type_room')->enum('Deluxe', 'Suite', 'Standar');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('status')->enum('Not yet', 'Already');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costumer');
    }
};
