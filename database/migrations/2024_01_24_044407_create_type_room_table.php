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
        Schema::create('type_room', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facility_id')->references('id')->on('facility')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('number_room_id')->references('id')->on('number_room')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_room');
    }
};
