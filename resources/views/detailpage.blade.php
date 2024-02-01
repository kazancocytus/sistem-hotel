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
        <div class=" container p-0 m-0 self-stretch">
            <hr class="mx-auto w-44 rounded-full mb-32" style="height: 5px!important;">
            <div class="block my-14 mx-10 w-auto p-6 bg-colorPrimary border border-gray-200 rounded-2xl shadow">
                <div class="font-josefin font-extrabold text-4xl text-left">Input Your Detail Of Reservation</div>
                <div class=" mt-14">
                    <form class="row flex flex-wrap" action="">
                        <div class=" mx-10 relative w-full h-20 z-0">
                            <input type="text" id="floating_standard"
                                class="block py-2.5 px-0 w-1/2 text-xl text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="floating_standard"
                                class=" font-josefin absolute text-xl text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Your
                                Fullname</label>
                        </div>
                        <div class=" object-top flex flex-col mx-10 w-1/3">
                            <div class=" row w-1/2">
                                <label class=" font-josefin mb-2" for="">Check In Date</label>
                                <input class="  rounded-xl" type="date">
                            </div>
                            <div class=" mx-4 my-4 row">
                                <i class=" text-left text-4xl bi bi-arrow-down-short"></i>
                            </div>
                            <div class=" row w-1/2">
                                <label class=" font-josefin mb-2" for="">Check Out Date</label>
                                <input class=" rounded-xl" type="date">
                            </div>
                        </div>
                        <!-- Input Number -->
                        <div class=" flex flex-col w-2/6">
                            <div class=" w-full py-2 px-3 bg-colorBg border border-white rounded-lg" data-hs-input-number>
                                <div class="w-full flex justify-between items-center">
                                <div>
                                    <span class=" font-josefin mt-2 block font-medium text-base text-white">
                                    Deluxe Room
                                    </span>
                                    <span class=" font-josefin mt-1 block text-xs text-white">
                                    $399 a Night
                                    </span>
                                </div>
                                <div class="flex items-center gap-x-1.5">
                                    <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-input-number-decrement>
                                    <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                    </button>
                                    <input class="p-0 w-6 bg-transparent border-0 text-white text-center focus:ring-0" type="text" value="0" data-hs-input-number-input>
                                    <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-input-number-increment>
                                    <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class=" w-full py-2 px-3 bg-colorBg border border-white rounded-lg" data-hs-input-number>
                                <div class="w-full flex justify-between items-center">
                                <div>
                                    <span class=" font-josefin mt-2 block font-medium text-base text-white">
                                    Suites Room
                                    </span>
                                    <span class=" font-josefin mt-1 block text-xs text-white">
                                    $299 a Night
                                    </span>
                                </div>
                                <div class="flex items-center gap-x-1.5">
                                    <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-input-number-decrement>
                                    <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                    </button>
                                    <input class="p-0 w-6 bg-transparent border-0 text-white text-center focus:ring-0" type="text" value="0" data-hs-input-number-input>
                                    <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-input-number-increment>
                                    <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                    </button>
                                </div>
                                </div>
                            </div>
                            <div class=" w-full py-2 px-3 bg-colorBg border border-white rounded-lg" data-hs-input-number>
                                <div class="w-full flex justify-between items-center">
                                <div>
                                    <span class=" font-josefin mt-2 block font-medium text-base text-white">
                                    Standart Room
                                    </span>
                                    <span class=" font-josefin mt-1 block text-xs text-white">
                                    $199 a Night
                                    </span>
                                </div>
                                <div class="flex items-center gap-x-1.5">
                                    <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-input-number-decrement>
                                    <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                    </button>
                                    <input class="p-0 w-6 bg-transparent border-0 text-white text-center focus:ring-0" type="text" value="0" data-hs-input-number-input>
                                    <button type="button" class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-input-number-increment>
                                    <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                    </button>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Number -->
                        <div>
                            <button class=" float-right ">
                                <a href="#_"
                                    class="relative inline-flex items-center px-12 py-2 overflow-hidden text-lg font-josefin font-medium text-colorBg border-2 border-colorgreen rounded-full hover:text-white group hover:bg-gray-50">
                                    <span
                                        class="absolute left-0 block w-full h-0 transition-all bg-colorgreen opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                                    <span
                                        class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </span>
                                    <span class="relative">Book Now</span>
                                </a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('components.footer')
    </div>

</body>

</html>
