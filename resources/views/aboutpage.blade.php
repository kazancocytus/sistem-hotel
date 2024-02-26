<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('assets/evergreenlogobgcrop.png') }}">
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
    <style>button[type="submit"] {
    background-color: #C6A969;
    }</style>
</head>

<body class="bg-colorSecondary bg-gradient-to-b from-colorSecondary from-5% to-colorPrimary to-35%">
    <div class="">
        @include('components.navbar')
        <div class=" w-full h-screen bg-cover bg-center" style="background-image: url({{asset('assets/abouthero.jpg')}})"></div>
        <div class="flex flex-wrap container">
            <div class=" mt-20 p-20">
                <div class="">
                    <h1 class="leading-relaxed font-julius font-black text-4xl text-center">
                        Discover Evergreen <br> Where Tranquility Meets Timeless Luxury</h1>
                    <hr class="mx-auto w-3/5 rounded-full mt-2 mb-4" style="height: 3px!important;">
                    <p class=" font-josefin font-extralight text-center text-2xl">Step into a world where every detail
                        whispers sophistication, and tranquility dances in harmony with opulence. Welcome to Evergreen
                        Hotel, a sanctuary nestled in the heart of Bogor. As you cross the threshold of our haven,
                        you're not just entering a hotel, you're embarking on an exclusive journey crafted for those who
                        seek an extraordinary blend of refined elegance and unmatched serenity.</p>
                </div>

                <h1 class=" mt-28 font-julius font-black text-4xl text-center">Evergreen Hotel History</h1>
                <hr class="mx-auto w-80 rounded-full mt-2 mb-4" style="height: 3px!important;">
                <p class=" mx-3 font-josefin font-light text-center text-lg">In the bustling city of Bogor, Evergreen
                    Hotel emerged on the hospitality scene in 2006,
                    conceived by the visionary Satrio Radja. Drawing inspiration from opportunity of mesmerizing view
                    and friendly environtment, the hotel began its journey with a commitment to redefine luxury and
                    redefine the guest
                    experience. What started as a modest endeavor has since flourished into an iconic establishment,
                    encapsulating the essence of sophistication and personalized service.</p>
                <div class="flex flex-row justify-around">
                    <div class=" w-2/5 mt-10">
                        <h1 class=" font-julius font-extrabold text-2xl text-center">Philosophy</h1>
                        <hr class="mx-auto w-28 rounded-full mt-2 mb-4" style="height: 2px!important;">
                        <ul>
                            <li class=" font-julius font-bold text-left">Cultural Immersion</li>
                            <dl class=" font-julius font-light text-sm text-left">We celebrate the rich heritage of our
                                surroundings, providing guests with authentic cultural experiences that go beyond
                                traditional hospitality</dl>
                        </ul>
                        <ul>
                            <li class=" mt-3 font-julius font-bold text-right">Wellness and Relaxation</li>
                            <dl class=" font-julius font-light text-sm text-right">Understanding the importance of
                                holistic
                                well-being, we provide an environment where guests can rejuvenate their mind, body, and
                                spirit</dl>
                        </ul>
                        <ul>
                            <li class=" mt-3 font-julius font-bold text-left">Personalized Attention</li>
                            <dl class=" font-julius font-light text-sm text-left">Each guest is unique, and so are their
                                needs.
                                We
                                go the extra mile to tailor our services, ensuring every visit is personalized and
                                memorable
                            </dl>
                        </ul>
                        <ul>
                            <li class=" mt-3 font-julius font-bold text-right">Continuous Improvement</li>
                            <dl class=" font-julius font-light text-sm text-right">We embrace change and are committed
                                to
                                evolving
                                with the times. Continuous improvement is not just a goal; it's embedded in our culture
                            </dl>
                        </ul>
                    </div>
                    <div class=" w-2/5 mt-10">
                        <div>
                            <p class="font-julius font-extrabold text-2xl text-center">Awards and Certificates
                            </p>
                            <hr class="mx-auto w-52 rounded-full mt-2 mb-4" style="height: 2px!important;">
                        </div>
                        <div>
                            <ul class=" text-center font-julius">
                                <li class=" font-bold text-base">TripAdvisor Certificate of Excellence</li>
                                <dl class="font-josefin font-light">Awarded to hotels consistently receiving positive
                                    and high reviews from guests</dl>

                                <li class=" font-bold text-base mt-4">Condé Nast Traveler Readers' Choice Awards</li>
                                <dl class="font-josefin font-light">Reader-selected awards by Condé Nast Traveler for
                                    the best hotels in various
                                    categories</dl>

                                <li class=" font-bold text-base mt-4">ISO 9001:2015 Certification</li>
                                <dl class="font-josefin font-light">Certification for quality management, indicating a
                                    high standard of service</dl>

                                <li class=" font-bold text-base mt-4">Booking.com Guest Review Awards</li>
                                <dl class="font-josefin font-light">Awards based on reviews and high ratings from guests
                                    booking through Booking.com
                                </dl>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block mt-20 mx-10 w-full p-6 bg-colorPrimary border border-gray-200 rounded-2xl shadow ">
                <div class=" text-4xl font-josefin text-center ">Testimonial</div>
                <div class=" container flex flex-row justify-around ">
                    @foreach ($reviews as $review)
                        <div
                            class=" mt-6 mx-3 block w-2/5 p-6 bg-colorPrimary border border-gray-200 rounded-2xl shadow ">
                            <div class="flex flex-row items-center mb-1">
                                <div class=" ml-1 font-medium text-colorBg">
                                    <p>{{ $review->name }}</p>
                                </div>
                            </div>
                            <div class="review-container">
                                <div class="back-stars">
                                    <div class="flex absolute items-center">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $review->star)
                                                <svg class="w-4 h-4 text-gray-300" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                            @else
                                                <svg class="w-4 h-4 text-gray-300" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                </div>

                                <div class="front-stars">
                                    <div class="flex relative items-center">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $review->star)
                                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                            @else
                                                <svg class="w-4 h-4 text-gray-300" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <p class=" my-3 text-gray-500 dark:text-gray-400">{{ $review->text }}</p>
                        </div>
                    @endforeach
                </div>
                <div class=" mt-6 mx-8">
                    {{ $reviews->links() }}
                </div>
            </div>

            <div class="my-10 ml-10 w-2/5 px-5 py-4 bg-colorPrimary border border-gray-200 rounded-2xl shadow ">
                <div>
                    <p class=" mt-2 mb-3 font-josefin text-3xl font-semibold opacity-90">Make Your Reviews!</p>
                </div>
                <hr class="mx-auto w-full rounded-full mt-1 mb-4" style="height: 5px!important;">
                <form action="{{ route('review.store') }}" method="GET" class="flex flex-wrap-reverse">
                    <div class="flex flex-col w-full">
                        <div class="flex items-center mb-1">
                            <div class=" w-full mb-3 font-medium text-colorBg opacity-90">
                                <input id="name" name="name"
                                    class=" w-2/3 font-josefin rounded-xl border-t-0 border-l-0 border-r-0 border-b-2 border-colorThird drop-shadow-lg"
                                    type="text" placeholder="Input Your Name..">
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="flex flex-row-reverse justify-end items-center">
                            <input id="hs-ratings-readonly-1" type="radio"
                                class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="hs-ratings-readonly" value="5">
                            <label for="hs-ratings-readonly-1"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-2" type="radio"
                                class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="hs-ratings-readonly" value="2">
                            <label for="hs-ratings-readonly-2"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-3" type="radio"
                                class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="hs-ratings-readonly" value="3">
                            <label for="hs-ratings-readonly-3"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-4" type="radio"
                                class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="hs-ratings-readonly" value="4">
                            <label for="hs-ratings-readonly-4"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-5" type="radio"
                                class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="hs-ratings-readonly" value="1">
                            <label for="hs-ratings-readonly-5"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </label>
                            <input type="hidden" name="star" id="star">
                        </div>
                        <!-- End Rating -->

                        <textarea id="text" name="text"
                            class="py-3 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-lg focus:border-blue-500 focus:border-t-transparent focus:border-x-transparent focus:border-b-colorThird focus:ring-0 font-josefin"
                            rows="4" placeholder="Tell Us Your Experience Here...">
                        </textarea>

                        <div>
                            <button type="submit" href="#_"
                                class=" w-full px-5 py-2.5 my-6 relative rounded group overflow-hidden font-medium bg-colorThird text-white ">
                                <span
                                    class="absolute top-0 left-0 flex w-full h-0 mb-0 transition-all duration-200 ease-out transform translate-y-0 bg-colorgreen group-hover:h-full opacity-90"></span>
                                <span class="relative font-bold text-xl group-hover:text-colorSecondary">Post!</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="my-10 mx-10 w-1/2 px-5 py-4 bg-colorPrimary border border-gray-200 rounded-2xl shadow ">
                <div class="mt-2 mb-1 font-josefin text-3xl font-semibold text-left">Address</div>
                <hr class=" text-left w-36 rounded-full" style="height: 2px!important;">
                <div class=" mt-4 font-josefin font-light text-xl">
                    <i class="bi bi-geo-alt-fill mr-4"></i>Jl.Raya Puncak - Gadog Km. 84, Tugu Utara
                </div>
                <div class=" pb-3 font-josefin font-light text-xl ml-9">Kec.Cisarua Kabupaten Bogor, Jawa Barat
                    16750</div>
                <div class=" mt-2 mb-3 font-josefin text-3xl font-semibold text-left">Social Media</div>
                <hr class=" text-left w-52 rounded-full mt-1 mb-4" style="height: 2px!important;">
                <ul>
                    <li>
                        <a href="">
                            <div class=" pt-2 pb-3 font-josefin font-light text-2xl">
                                <i class="bi bi-instagram mr-4"></i>evergreen_hotel
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class=" py-3 font-josefin font-light text-2xl ">
                                <i class="bi bi-facebook mr-4"></i>Evergreen Hotel Indonesia
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class=" py-3 font-josefin font-light text-2xl ">
                                <i class="bi bi-twitter mr-4"></i>evergreen_hotel
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>

    @include('sweetalert::alert')
    @include('components.footer')
    <script>
        const ratingInputs = document.querySelectorAll('input[name="hs-ratings-readonly"]');
        const ratingValue = document.getElementById('star');

        ratingInputs.forEach(input => {
            input.addEventListener('change', () => {
                ratingValue.value = input.value;
            });
        });
    </script>
</body>

</html>
