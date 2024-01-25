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

    {{-- Navbar Start --}}

    
    <div class="bg-colorPrimary">
        <header class="fixed inset-x-0 top-0 z-50 bg-gradient-to-b from-colorgreen from-70% to-transparent">
            <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-3 p-3">
                        <img class="h-10 w-auto" src="{{ asset('assets/evergreenlogobgcrop.png') }}" alt=""><a
                            href="#" class="text-white self-center font-julius">EVERGREEN Hotel</a>
                    </a>
                </div>
                <div class="lg:flex lg:gap-x-20 justify-self-end">
                    <a href="#" class="text-sm font-josefin font-light leading-6 text-white">Room</a>
                    <a href="#" class="text-sm font-josefin font-light leading-6 text-white">Reservation</a>
                    <a href="#" class="text-sm font-josefin font-light leading-6 text-white">Contact</a>
                    <a href="#" class="text-sm font-josefin font-light leading-6 text-white">About</a>
                </div>


                @if (Route::has('login'))
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    @auth
                    <button type="button" class="text-sm font-josefin font-semibold leading-6 text-white"><a href="{{ route('costumer.logout') }}">Log out</a><span
                                            aria-hidden="true">&rarr;</span></button>
                @else
                   
                    <button type="button" class="text-sm font-josefin font-semibold leading-6 text-white"
                                data-bs-toggle="modal" data-bs-target="#modalLogin">Log in <span
                                    aria-hidden="true">&rarr;</span></button>
                
                    @endauth
                </div>
                @endif
            </nav>
    </div>
    

    {{-- Navbar Stop --}}

    {{-- Login Start --}}

    <!-- Modal -->
    <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-3xl p-6">
                <div class="modal-header">
                    <h5 class="modal-title font-josefin text-4xl m-3" id="exampleModalLabel">Login To Your Account</h5>
                    <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"
                            style="font-size: 40px"></i></button>
                </div>
                <div class="modal-body">   
                        <div class="mb-3">
                            <label for="email" class="form-label font-josefin">Email</label>
                            <input type="email" class="form-control rounded-xl " id="email" name="email"
                                placeholder="Name/Email" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label font-josefin">Password</label>
                            <input type="password" class="form-control rounded-xl" id="password" name="password"
                                placeholder="Password" />
                        </div>
                        <div class="d-grid gap-3">
                            <button type="submit"
                                class=" pt-2 font-josefin text-lg text-colorBg btn btn-success">LOGIN</button>
                            <h2
                                style="width: 100%; text-align: center; border-bottom: 1px solid #000; line-height: 0.1em; margin: 10px 0 20px;">
                                <span class="" style="background:#fff; padding:0 5px; font-size:10px;">OR</span>
                            </h2>
                            <button type="button" class=" pt-2 mb-2 font-josefin text-xs text-colorBg btn btn-success"
                                data-bs-toggle="modal" data-bs-target="#modalRegister">SIGN UP</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </form>

    {{-- Login Stop --}}

    {{-- Register Start --}}

    <div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-3xl p-6">
                <div class="modal-header">
                    <h5 class="modal-title font-josefin text-4xl m-3" id="exampleModalLabel">Create Your Account</h5>
                    <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"
                            style="font-size: 40px"></i></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label font-josefin">Email</label>
                            <input type="email" class="form-control rounded-xl" id="email" name="email"
                                placeholder="Input Your Email Here" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label font-josefin">Phone Number</label>
                            <input type="text" class="form-control rounded-xl" id="phone" name="phone"
                                placeholder="Input Your Phone Number Here" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label font-josefin">Fullname</label>
                            <input type="text" class="form-control rounded-xl" id="fullname" name="ffullname"
                                placeholder="Input Your Fullname Here" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label font-josefin">Birth Date</label>
                            <input type="date" class="form-control rounded-xl" id="birth" name="birth"
                                placeholder="Input Your Birth Date Here" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label font-josefin">Password</label>
                            <input type="password" class="form-control rounded-xl" id="password" name="password"
                                placeholder="Input Your Password Here" />
                        </div>
                        <div class="d-grid gap-3">
                            <button type="submit"
                                class=" pt-2 font-josefin text-lg text-colorBg btn btn-success">SIGN IN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Register Stop --}}

    <div id="hero" class="">
        <img class="w-full flex relative bg-gradient-to-b to-colorPrimary" src="{{ asset('assets/heroimg.jpg') }}"
            alt="">
        <div
            class="absolute font-josefin font-semibold text-colorPrimary text-9xl top-1/2 left-1/3 -translate-x-1/2 -translate-y-1/2">
            <h1>Welcome</h1>
            <h1>To Evergreen</h1>
        </div>
    </div>

    <div class=" container mx-auto my-auto">
        <div class="mt-60 text-center text-black text-4xl font-semibold font-josefin">EVERGREEN EXPERIENCE</div>
        <div>
            <p class="mx-28 my-10 h-36 text-center text-black text-xl font-josefin">Inspired by the beauty of
                Parahyangan, Evergreen Hotel Bandung offers spectacular mountain views, indulgent dining, elegant
                guestrooms and exceptional hospitality personified by its 24-hour Butler Service. Located in the hills
                of Cimareme, and yet only minutes from the bustle of Bandung's city centre, the hotel is 10 km from
                Husein Sastranegara International Airport and 9km from Bandung train station.
                Evergreen Hotel Bandung is the perfect place for a rejuvenating, opulent getaway, private gatherings,
                and well-organised events and meetings.</p>
        </div>

        <div>
            <div class="mt-60 text-center text-black text-3xl font-semibold font-josefin">FACILITIES</div>
            <div class="container mx-auto">
                <img class="relative mr-20 rounded-xl bg-auto float-end w-5/12 h-72"
                    src="{{ asset('assets/lounge.jpg') }}" alt="">
                <div class="w-2/4 mt-28 text-center text-black text-3xl font-semibold font-josefin">Lounge</div>
                <p class="w-5/12 mt-6 ml-16 text-xl text-right float-start font-josefin">An enticing array of
                    restaurants are available at Evergreen Hotel for your dining pleasure. From a sumptuous
                    international buffet to an authentic Chinese restaurant to a Churrascaria Brazilian Restaurant, a
                    diverse gastronomy experience await you to savour.</p>
            </div>
            <div class="container mx-auto mt-80">
                <img class="relative ml-20 rounded-xl bg-auto float-start w-5/12 h-72"
                    src="{{ asset('assets/playground.jpg') }}" alt="">
                <div class="float-end w-2/4 mt-3 text-center text-black text-3xl font-semibold font-josefin">Kids
                    Playground</div>
                <p class="w-5/12 mt-6 mr-16 text-xl text-left float-end font-josefin">Step into a breathtaking Nature
                    Wonderland within our playground, where every corner is a gateway to the beauty and marvels of the
                    natural world. We've crafted a space where children can explore, discover, and develop a deep
                    connection with the environment, making every playtime an educational and enchanting experience.</p>
            </div>
            <div class="container mx-auto mt-96">
                <img class="relative mt-32 mr-20 rounded-xl bg-auto float-end w-5/12 h-72"
                    src="{{ asset('assets/pool.jpg') }}" alt="">
                <div class="float-start w-2/4 mt-24 text-center text-black text-3xl font-semibold font-josefin">
                    Swimming Pool</div>
                <p class="w-5/12 mt-6 ml-16 text-xl text-right float-start font-josefin">Dive into the ultimate aquatic
                    adventure at our swimming pool facilities, where waves of excitement and relaxation await! Our
                    splash-tastic paradise is designed to provide a refreshing escape for all ages, offering a variety
                    of water features and amenities to make your poolside experience truly unforgettable.</p>
            </div>
            <div class="container mx-auto mt-96">
                <img class=" mt-32 relative ml-20 rounded-xl bg-auto float-start w-5/12 h-72"
                    src="{{ asset('assets/gym.jpg') }}" alt="">
                <div class=" mt-24 float-end w-2/4 text-center text-black text-3xl font-semibold font-josefin">Indoor
                    Gym</div>
                <p class="w-5/12 mt-6 mr-16 text-xl text-left float-end font-josefin">Welcome to FitLand, where fitness
                    meets fun in our state-of-the-art gym facilities and wellness center. We've created a dynamic space
                    that caters to all fitness levels and ages, promoting a healthy lifestyle through an array of
                    energizing activities and amenities.</p>
            </div>
        </div>
    </div>
</body>

</html>
