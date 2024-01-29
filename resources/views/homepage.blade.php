<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('assets/evergreenlogobgcrop.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Evergreen Hotel</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite('resources/css/app.css')
</head>

<body>

    @include('components.navbar')

    <div class=" bg-colorSecondary">
        <div class=" container p-0 m-0 self-stretc">
            <div id="hero" class=" bg-gradient-to-b to-colorPrimary">
                <img class="w-full max-h-screen flex relative" src="{{ asset('assets/heroimg.jpg') }}" alt="">
                <div
                    class=" absolute font-josefin font-semibold text-colorPrimary text-9xl top-1/2 left-1/3 -translate-x-1/2 -translate-y-1/2">
                    <h1>Welcome</h1>
                    <h1>To Evergreen</h1>
                </div>
            </div>

            <div class=" container mx-auto my-auto">
                <div class="mt-60 text-center text-black text-4xl font-semibold font-josefin">EVERGREEN EXPERIENCE
                </div>
                <hr class="mx-auto w-96 rounded-full mt-3" style="height: 5px!important;">
                <div>
                    <p class="mx-28 my-10 h-36 text-center text-black text-xl font-josefin">Inspired by the beauty of
                        Parahyangan, Evergreen Hotel Bandung offers spectacular mountain views, indulgent dining,
                        elegant
                        guestrooms and exceptional hospitality personified by its 24-hour Butler Service. Located in the
                        hills
                        of Cimareme, and yet only minutes from the bustle of Bandung's city centre, the hotel is 10 km
                        from
                        Husein Sastranegara International Airport and 9km from Bandung train station.
                        Evergreen Hotel Bandung is the perfect place for a rejuvenating, opulent getaway, private
                        gatherings,
                        and well-organised events and meetings.</p>
                </div>

                <div class=" flex-col flex">
                    <div class=" mt-40 text-center text-black text-3xl font-semibold font-josefin">FACILITIES</div>
                    <hr class="mx-auto w-24 rounded-full mt-3" style="height: 5px!important;">
                    <div class="container mx-auto">
                        <img class="relative mr-20 rounded-xl bg-auto float-end w-5/12 h-72 mt-28"
                            src="{{ asset('assets/lounge.jpg') }}" alt="">
                        <div class="w-2/4 mt-28 text-center text-black text-3xl font-semibold font-josefin">Lounge
                        </div>
                        <p class="w-5/12 mt-6 ml-16 text-xl text-right float-start font-josefin">An enticing array of
                            restaurants are available at Evergreen Hotel for your dining pleasure. From a sumptuous
                            international buffet to an authentic Chinese restaurant to a Churrascaria Brazilian
                            Restaurant,
                            a
                            diverse gastronomy experience await you to savour.</p>
                    </div>
                    <div class="container mx-auto mt-24">
                        <img class="relative ml-20 rounded-xl bg-auto float-start w-5/12 h-72"
                            src="{{ asset('assets/playground.jpg') }}" alt="">
                        <div class="float-end w-2/4 text-center text-black text-3xl font-semibold font-josefin">Kids
                            Playground</div>
                        <p class="w-5/12 mt-6 mr-16 text-xl text-left float-end font-josefin">Step into a breathtaking
                            Nature
                            Wonderland within our playground, where every corner is a gateway to the beauty and marvels
                            of
                            the
                            natural world. We've crafted a space where children can explore, discover, and develop a
                            deep
                            connection with the environment, making every playtime an educational and enchanting
                            experience.
                        </p>
                    </div>
                    <div class="container mx-auto mt-24">
                        <img class="relative mr-20 rounded-xl bg-auto float-end w-5/12 h-72"
                            src="{{ asset('assets/pool.jpg') }}" alt="">
                        <div class="float-start w-2/4 text-center text-black text-3xl font-semibold font-josefin">
                            Swimming Pool</div>
                        <p class="w-5/12 mt-6 ml-16 text-xl text-right float-start font-josefin">Dive into the ultimate
                            aquatic
                            adventure at our swimming pool facilities, where waves of excitement and relaxation await!
                            Our
                            splash-tastic paradise is designed to provide a refreshing escape for all ages, offering a
                            variety
                            of water features and amenities to make your poolside experience truly unforgettable.</p>
                    </div>
                    <div class="container mx-auto mt-24">
                        <img class=" relative ml-20 rounded-xl bg-auto float-start w-5/12 h-72"
                            src="{{ asset('assets/gym.jpg') }}" alt="">
                        <div class=" float-end w-2/4 text-center text-black text-3xl font-semibold font-josefin">
                            Indoor
                            Gym</div>
                        <p class="w-5/12 mt-6 mr-16 text-xl text-left float-end font-josefin">Welcome to FitLand, where
                            fitness
                            meets fun in our state-of-the-art gym facilities and wellness center. We've created a
                            dynamic
                            space
                            that caters to all fitness levels and ages, promoting a healthy lifestyle through an array
                            of
                            energizing activities and amenities.</p>
                    </div>
                </div>
            </div>
        </div>

        @include('components.footer')
    </div>
</body>

</html>
