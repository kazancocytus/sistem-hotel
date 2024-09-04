<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NumberRoom;
use Illuminate\Support\Facades\DB;


class NumberRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('number_room')->insert([
            ['number_room' => 2, 'type_room' => 1, 'price' => 299], // Deluxe
            ['number_room' => 3, 'type_room' => 2, 'price' => 399], // Suite
            ['number_room' => 1, 'type_room' => 0, 'price' => 199], // Standar
        ]);
    
        // Generate data secara acak untuk ID lainnya
        NumberRoom::factory()->count(117)->create();
    }
}