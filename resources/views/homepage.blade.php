<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('assets/evergreenlogobgcrop.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
    @vite('resources/js/app.js')
</head>

<body>

    @include('components.navbar')
    <div class=" bg-colorSecondary">
        <div id="hero" class=" shadow-2xl">
            <img class="w-full max-h-dvh relative bg-gradient-to-t from-colorBg from-80% to-transparent"
                src="{{ asset('assets/heroimg.jpg') }}" alt="">
            <div
                class=" drop-shadow-2xl absolute font-josefin font-semibold text-colorPrimary text-9xl top-1/2 left-1/3 -translate-x-1/2 -translate-y-1/2">
                <h1>Welcome</h1>
                <h1>To Evergreen</h1>
            </div>
        </div>
        <div class=" container p-0 m-0 self-stretc">


            <div class="container mx-auto my-auto" id="facility-list">
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
                    @foreach ($facility as $key => $facility)
                        <div class="container mx-auto">
                            @if ($key % 2 == 0)
                                <img class="relative mr-20 rounded-xl bg-auto float-end w-5/12 h-72 mt-28"
                                    src="{{ url('assets/img/facility/' . $facility->image) }}" alt="">
                                <div class="w-2/4 mt-28 text-center text-black text-3xl font-semibold font-josefin">
                                    {{ $facility->name }}</div>
                                <p class="w-5/12 mt-6 ml-16 text-xl text-right float-start font-josefin">
                                    {{ $facility->description_facility }}</p>
                            @else
                                <img class="relative ml-20 rounded-xl bg-auto float-start w-5/12 h-72 mt-28"
                                    src="{{ url('assets/img/facility/' . $facility->image) }}" alt="">
                                <div
                                    class="w-2/4 mt-28 text-center text-black text-3xl font-semibold font-josefin float-start">
                                    {{ $facility->name }}
                                </div>
                                <p class="float-start w-5/12 mt-6 ml-16 text-xl text-right float-start font-josefin">
                                    {{ $facility->description_facility }}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </div>

        @include('components.footer')
    </div>
</body>

</html>
