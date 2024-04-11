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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('number_room_id')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('no_reservation')->index();
            $table->string('name');
            $table->numeric('no_rekening', 10 , 2);
            $table->string('phone');
            $table->date('check_in');
            $table->date('check_out');
            $table->decimal('price', 10,2);
            $table->integer('suite')->nullable();
            $table->integer('deluxe')->nullable();
            $table->integer('standart')->nullable();
            $table->json('deluxe_room_number')->nullable();
            $table->json('suite_room_number')->nullable();
            $table->json('standart_room_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
