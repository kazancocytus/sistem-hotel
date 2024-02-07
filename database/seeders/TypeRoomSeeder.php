<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_room')->insert([
            // Deluxe
            [
                'name' => 'Deluxe',
                'description' => "Elevate your stay with our Deluxe Rooms at
                Evergreen Hotel. These spacious and tastefully decorated rooms offer a haven of comfort. Enjoy a plush
                king-sized bed, elegant furnishings, and modern amenities. The large windows provide breathtaking views
                of the city/surroundings. Deluxe Rooms come equipped with a well-appointed en-suite bathroom, featuring
                a relaxing bathtub and premium toiletries. Stay connected with high-speed Wi-Fi and unwind with a
                selection of in-room entertainment options. Experience opulence at its best in our Deluxe Rooms.",
                'image' => 'assets/deluxepic (1).jpg',
            ],
            [
                'name' => 'Suite',
                'description' => "Indulge in luxury in our Suites at
                Evergreen Hotel. These expansive living spaces are designed for the discerning traveler seeking refined
                comfort. The separate living area offers a relaxing ambiance, complemented by a luxurious bedroom
                featuring a king-sized bed. Immerse yourself in the panoramic views from the suite's private balcony.
                Suites come complete with a fully equipped kitchenette, ideal for those who prefer the convenience of
                in-room dining. Pamper yourself in the spacious bathroom, featuring a deluxe shower and a range of
                upscale amenities. Experience the epitome of sophistication in our Suites.",
                'image' => 'assets/suitespic.jpg'
            ],
            [
                'name' => 'Standar',
                'description' => 'Discover simplicity and comfort in our Standard
                Rooms at Evergreen Hotel. Thoughtfully designed for both business and leisure travelers, these rooms
                provide a cozy retreat. Enjoy a choice between a king-sized bed or twin beds, along with essential
                amenities to make your stay pleasant. The work desk and high-speed Wi-Fi cater to business needs, while
                the comfortable seating area is perfect for relaxation. The en-suite bathroom is well-appointed,
                offering a rejuvenating shower and complimentary toiletries. Standard Rooms at Evergreen Hotel provide a
                welcoming and affordable accommodation option.',
                'image' => 'standarpic.jpg'
            ]
        ]);
    }
}
