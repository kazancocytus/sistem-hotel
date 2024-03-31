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
        <div class=" pt-20"><iframe class=" w-full h-96"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127310.60600675312!2d106.88066931291503!3d-6.644368248457376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b6606aaf84c5%3A0xcf58f03e3918401d!2sEvergreen%20Hotel%20%26%20Village!5e0!3m2!1sid!2sid!4v1706001470228!5m2!1sid!2sid"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class=" container">
            <div class=" row">
                <div class=" w-2/5 mx-8">
                    <div class=" w-1/2 px-8 pt-8 font-josefin font-semibold text-4xl">Contact</div>
                    <hr class=" w-2/5">
                    <div class=" pt-8 font-josefin font-light text-xl">
                        <i class="bi bi-geo-alt-fill mr-4 mb-6"></i>Jl.Raya Puncak - Gadog Km. 84, Tugu Utara
                    </div>
                    <div class=" pb-3 font-josefin font-light text-xl ml-9">Kec.Cisarua Kabupaten Bogor, Jawa Barat
                        16750</div>
                    <div class=" py-3 font-josefin font-light text-xl ">
                        <i class="bi bi-telephone-fill mr-4"></i>(0251)8250077
                    </div>
                    <div class=" py-3 font-josefin font-light text-xl ">
                        <i class="bi bi-whatsapp mr-4"></i>08328434873
                    </div>
                    <a href="">
                        <div class=" py-2 font-josefin font-light text-xl ">
                            <i class="bi bi-envelope-at-fill mr-4"></i>evergreenhotel@gmail.com
                        </div>
                    </a>
                </div>
                <div class=" w-2/5 mx-8">
                    <div class=" px-8 pt-8 font-josefin font-semibold text-4xl">Social Media</div>
                    <hr class=" w-3/5">
                    <ul>
                        <li>
                            <a href="">
                                <div class=" pt-8 pb-3 font-josefin font-light text-2xl">
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


        @include('components.footer')
    </div>
</body>

</html>
