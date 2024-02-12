<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumberRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 

        DB::table('number_room')->insert([
            [
                'number_room' => 1,
                'type_room' => 'Deluxe',
                'price' => 299,
                'status' => 'Available',
            ],
            [
                'number_room' => 2,
                'type_room' => 'Suite',
                'price' => 399,
                'status' => 'Available',
            ],
            [
                'number_room' => 3,
                'type_room' => 'Standar',
                'price' => 199,
                'status' => 'Available',
            ],
        ]);
    }
}
