<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NumberRoom;

class NumberRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            for ($i = 1; $i <= 80; $i++) {
                NumberRoom::factory()->create([
                    'number_room' => $i,
                ]);
            }
    }
}