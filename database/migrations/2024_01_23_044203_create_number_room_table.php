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
            $table->id();
            $table->integer('number_room')->index();
            $table->integer('type_room');
            $table->decimal('price', 10, 2);
            $table->boolean('available')->default(true)->after('type_room');
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
