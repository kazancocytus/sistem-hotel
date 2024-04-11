<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('facility')->insert([

            [
                'name' => 'Deluxe',
                'description_facility' => 'High-speed Wi-Fi In-room entertainment options Complimentary bottled water Air conditioning and heating Daily housekeeping Breathtaking city/surrounding views Elegant furnishings Spacious en-suite bathroom with bathtub',
                'image' => '20240223095856.2.jpg',
            ],
            [
                'name' => 'Suite',
                'description_facility' => 'High-speed Wi-Fi In-room entertainment options Complimentary bottled water Air conditioning and heating Daily housekeeping Breathtaking city/surrounding views Elegant furnishings Spacious en-suite bathroom with bathtub Private balcony with panoramic views Fully equipped kitchenette',
                'image' => '20240223095940.17.jpg',
            ],
            [
                'name' => 'Standar',
                'description_facility' => 'High-speed Wi-Fi In-room entertainment options Complimentary bottled water Air conditioning and heating Daily housekeeping',
                'image' => '20240223100012.13.jpg',
            ],
            [
                'name' => 'Lounge',
                'description_facility' => "An enticing array of restaurants are available at Evergreen Hotel for your dining pleasure. From a sumptuous international buffet to an authentic Chinese restaurant to a Churrascaria Brazilian Restaurant, a diverse gastronomy experience await you to savour.",
                'image' => '20240223101109.20240207031509.lounge.jpg',
            ],
            [
                'name' => 'Kids Playground',
                'description_facility' => "Step into a breathtaking Nature Wonderland within our playground, where every corner is a gateway to the beauty and marvels of the natural world. We''ve crafted a space where children can explore, discover, and develop a deep connection with the enviro",
                'image' => '20240223101036.20240207031848.playground.jpg',
            ],
            [
                'name' => 'Swimming Pool',
                'description_facility' => 'Dive into the ultimate aquatic adventure at our swimming pool facilities, where waves of excitement and relaxation await! Our splash-tastic paradise is designed to provide a refreshing escape for all ages, offering a variety of water features and amenities to make your poolside experience truly unforgettable.',
                'image' => '20240223100156.renang.jpg',
            ],
            [
                'name' => 'Indoor Gym',
                'description_facility' => "Welcome to FitLand, where fitness meets fun in our state-of-the-art gym facilities and wellness center. We''ve created a dynamic space that caters to all fitness levels and ages, promoting a healthy lifestyle through an array of energizing activities and amenities.",
                'image' => '20240223101016.20240207032537.gym.jpg',
            ],
            

        ]);

    }
}
