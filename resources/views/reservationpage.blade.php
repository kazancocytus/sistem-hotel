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
    @vite('resources/js/app.js')
</head>

<body>

    @include('components.navbar')

    <div class=" bg-colorSecondary">
        <div class=" container p-0 m-0 self-stretc">
            <div class=" pt-40 text-center text-black text-4xl font-semibold font-josefin">RESERVATION
            </div>
            <hr class="mx-auto w-44 rounded-full mt-3" style="height: 5px!important;">
        </div>
        @foreach ($typeRoom as $type => $typeRoom)
            <div class="block my-14 mx-10 w-auto p-6 bg-colorPrimary border border-gray-200 rounded-2xl shadow ">
                <div class=" pl-10 pb-7 pt-10 text-left font-black text-5xl font-julius">
                    {{ $typeRoom->name }}</div>
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative mx-10 h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class=" duration-700 ease-in-out" data-carousel-item>
                            <img src=" {{ $typeRoom->image }} "
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/docs/images/carousel/carousel-2.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div class=" my-10 px-10 text-base text-left font-josefin">{{ $typeRoom->description }}</div>
                <div class=" mt-10 mb-6 px-10 py-2 text-sm text-left font-josefin">
                    <div class=" relative row text-slate-500">
                        <div class="font-josefin text-lg text-left">Facilities :</div>
                        <hr class="rounded-full mb-6" style="height: 2px!important;">
                        <ul class=" w-1/5">
                            <li class="py-2 font-josefin">{{ $typeRoom->description_facility }}</li>
                        </ul>
                        <div class=" absolute bottom-0 right-0 w-3/12">
                            <div class=" mb-3">
                                <span
                                    class=" text-center font-josefin text-3xl font-bold text-colorgreen">${{ $typeRoom->price }}/
                                    Night</span>
                            </div>
                            @if (Route::has('login'))
                                <div class=" ml-3">
                                    <button class="right">
                                        @auth
                                            <a href="{{ route('detail') }}"
                                                class="relative inline-flex items-center px-12 py-2 overflow-hidden text-lg font-josefin font-medium text-colorBg border-2 border-colorgreen rounded-full hover:text-white group hover:bg-gray-50">
                                            @else
                                                <a data-bs-toggle="modal" data-bs-target="#modalLogin"
                                                    class="relative inline-flex items-center px-12 py-2 overflow-hidden text-lg font-josefin font-medium text-colorBg border-2 border-colorgreen rounded-full hover:text-white group hover:bg-gray-50">
                                                @endauth
                                                <span
                                                    class="absolute left-0 block w-full h-0 transition-all bg-colorgreen opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                                                <span
                                                    class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg>
                                                </span>
                                                <span class="relative">Book Now</span>
                                            </a>
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    @include('components.footer')
    </div>
    </div>


</body>

</html>
