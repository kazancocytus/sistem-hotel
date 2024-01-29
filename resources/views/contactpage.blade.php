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
        <header class="fixed inset-x-0 top-0 z-50 bg-colorgreen">
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
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <button type="button" class="text-sm font-josefin font-semibold leading-6 text-white"
                        data-bs-toggle="modal" data-bs-target="#modalLogin">Log in <span
                            aria-hidden="true">&rarr;</span></button>
                </div>
            </nav>
    </div>

    {{-- Navbar Stop --}}


    <div>
        <div class=" pt-24"><iframe class=" w-full h-96"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127310.60600675312!2d106.88066931291503!3d-6.644368248457376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b6606aaf84c5%3A0xcf58f03e3918401d!2sEvergreen%20Hotel%20%26%20Village!5e0!3m2!1sid!2sid!4v1706001470228!5m2!1sid!2sid"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class=" items-baseline">
            <div class=" w-2/5 mx-8">
                <div class=" w-2/5 px-8 pt-8 font-josefin font-semibold text-4xl">Contact</div>
                <hr class=" w-2/5">
                <div class=" w-2/5 pt-8 font-josefin font-light text-xl"><i
                        class="bi bi-geo-alt-fill mr-4 mb-10"></i>Jl. Raya Puncak - Gadog No.Km. 84, Tugu Utara, Kec.
                    Cisarua</div>
                <div class=" w-2/5 pb-4 font-josefin font-light text-xl ml-9">Kabupaten Bogor, Jawa Barat 16750</div>
                <div class=" py-2 font-josefin font-light text-xl "><i
                        class="bi bi-telephone-fill mr-4"></i>(0251)8250077</div>
                <div class=" py-2 font-josefin font-light text-xl "><i class="bi bi-whatsapp mr-4"></i>08328434873</div>
                <div class=" py-2 font-josefin font-light text-xl "><i
                        class="bi bi-envelope-at-fill mr-4"></i>evergreenhotel@gmail.com</div>
            </div>
            <div class=" float-none w-2/5 mx-8">
                <div class=" w-2/5 px-8 pt-8 font-josefin font-semibold text-4xl">Social Media</div>
                <hr class=" w-2/5">
                <div class=" w-2/5 pt-8 font-josefin font-light text-xl"><i
                        class="bi bi-geo-alt-fill mr-4 mb-10"></i>Jl. Raya Puncak - Gadog No.Km. 84, Tugu Utara, Kec.
                    Cisarua</div>
                <div class=" w-2/5 pb-4 font-josefin font-light text-xl ml-9">Kabupaten Bogor, Jawa Barat 16750</div>
                <div class=" py-2 font-josefin font-light text-xl "><i
                        class="bi bi-telephone-fill mr-4"></i>(0251)8250077</div>
                <div class=" py-2 font-josefin font-light text-xl "><i class="bi bi-whatsapp mr-4"></i>08328434873</div>
                <div class=" py-2 font-josefin font-light text-xl "><i
                        class="bi bi-envelope-at-fill mr-4"></i>evergreenhotel@gmail.com</div>
            </div>
        </div>
    </div>

    <footer>
        <div class=" mt-5 py-8 bg-colorBg ">
            <div class=" text-center text-sm text-colorThird">Copyright<i class="bi bi-c-circle ml-2"></i>Evergreen
                Hotel Company. All Rights Reserved.</div>
        </div>
    </footer>

</body>

</html>
