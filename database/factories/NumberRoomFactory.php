<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\NumberRoom;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NumberRoom>
 */
class NumberRoomFactory extends Factory
{
    protected $model = NumberRoom::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomId = $this->faker->numberBetween(4, 120); // Mulai dari 4 untuk menghindari ID 1, 2, dan 3

        $roomType = $this->faker->randomElement([0, 1, 2]);
    
        // Tentukan harga berdasarkan tipe kamar
        $price = ($roomType === 0) ? 199 : (($roomType === 1) ? 299 : 399);
    
        return [
            'number_room' => $roomId,
            'type_room' => $roomType,
            'price' => $price,
        ];
    }
    
}
