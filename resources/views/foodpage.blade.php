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

<body class=" bg-colorSecondary">
    @include('components.navbar')

    <div class="block mt-32 mb-14 mx-10 w-auto p-6 bg-colorPrimary border border-gray-200 rounded-2xl shadow">
        <div class=" container p-0 m-0 self-stretc">
            <div class=" mt-8 text-center text-black text-4xl font-semibold font-josefin">Food And Beverages
            </div>
            <hr class="mx-auto w-60 rounded-full mt-2" style="height: 5px!important;">
        </div>
        <div class=" my-3 flex flex-wrap justify-center">
            @foreach($foods as $food)
            <div class="card mx-4 my-7 rounded-xl w-80 h-80">
                <img src=" {{ asset('assets/img/food/' . $food->image) }} " class="card-img-top h-2/3 rounded-t-xl" alt="...">
                <div class="card-body">
                    <h1 class=" font-josefin text-xl font-semibold">{{ $food->name }}</h1>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @include('components.footer')
</body>

</html>
