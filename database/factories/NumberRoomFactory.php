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
        $roomType = $this->faker->randomElement([0, 1, 2]);

        $price = ($roomType === 0) ? 399 : (($roomType === 1) ? 299 : 199);

        return [
            'type_room' => $roomType,
            'price' => $price,
        ];
    }
}
