<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link rel="icon" href="{{ asset('assets/evergreenlogobgcrop.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')

</head>

<body class=" bg-colorgreen">
    @include('staff.sidebar')

    <div>
        <div class="font-josefin text-2xl font-semibold mx-40 mt-3 text-colorPrimary"> <i class="bi bi-people-fill mx-3 text-colorPrimary"></i>Detail Order
        </div>
    </div>
    <form class="w-11/12 mx-14 pb-5" action="{{ route('reservation.payment') }}" method="POST">
        @csrf
        <div class="block mt-6 w-4/5 mx-28 px-28 py-12 mb-10 bg-colorSecondary border border-gray-200 rounded-2xl shadow row">
            <div class=" container">
                <div class=" mb-10 row w-full  mt-10 float-start " action="">
                    <div class=" w-1/3 float-right">
                        <label class=" form-label font-josefin text-xl font-medium" id=""> Check In</label>
                        <input class="form-control rounded-xl bg-colorSecondary" disabled type="date" name="check_in"
                            id="check_in" value="{{ $dataReservation['check_in'] }}">
                    </div>
                    <div class=" w-1/3 float-right">
                        <label class=" form-label font-josefin text-xl font-medium" id=""> Check Out</label>
                        <input class=" form-control rounded-xl bg-colorSecondary" disabled type="date" name="check_out"
                            id="check_out" value="{{ $dataReservation['check_out'] }}">
                    </div>
                </div>
            </div>
        <div class="">
            <div class="card-body">
                <h5 class="card-title font-josefin text-2xl font-bold border-b-2 border-colorThird">Costumer Personal Information</h5>
                <ul class="list-group list-group-flush">
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">NIP</label>
                    <input class="form-control rounded-xl bg-colorPrimary" type="text" name="nip" id="nip"
                        value="{{ $infoCostumer['nip'] }}" disabled>
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Name</label>
                    <input class="form-control rounded-xl bg-colorPrimary" type="text" name="name" id="name"
                        value="{{ $infoCostumer['name'] }}" disabled>
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Email</label>
                    <input class="form-control rounded-xl bg-colorPrimary" type="email" name="email" id="email"
                        value="{{ $infoCostumer['email'] }}" disabled>
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Phone Number</label>
                    <input class="form-control rounded-xl bg-colorPrimary" type="text" name="phone" id="phone"
                        value="{{ $infoCostumer['phone'] }}" disabled>
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Birth Date</label>
                    <input class="form-control rounded-xl bg-colorPrimary" type="date" name="birth_date" id="birth_date"
                        value="{{ $infoCostumer['birth_date'] }}" disabled>
                </ul>
            </div>
        </div>
        <div class="">
            <div class="card-body">
                <h5 class="card-title font-josefin text-2xl font-bold mt-20 border-b-2 border-colorThird">Booking Details</h5>
                <ul class="list-group list-group-flush">
                    <label class=" form-label font-josefin text-xl font-medium mt-2" id="">No.
                        Reservation</label>
                    <input class="form-control rounded-xl bg-colorSecondary" type="text" name="no_reservation"
                        id="no_reservation" value="{{ $dataReservation['no_reservation'] }}" disabled>
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Suites Rooms</label>
                    <input class="form-control rounded-xl bg-colorSecondary" type="text" name="suite" id="suite"
                        value="{{ $dataReservation['suite'] }}" disabled>
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Deluxe Rooms</label>
                    <input class="form-control rounded-xl bg-colorSecondary" type="text" name="deluxe" id="deluxe"
                        value="{{ $dataReservation['deluxe'] }}" disabled>
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Standart
                        Rooms</label>
                    <input class="form-control rounded-xl bg-colorSecondary" type="text" name="standart"
                        id="standart" value="{{ $dataReservation['standart'] }}" disabled>
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Number Suites
                        Room</label>
                    <input class="form-control rounded-xl bg-colorSecondary" type="text" name="suite_room_number"
                        id="suite_room_number"
                        value="{{ $dataReservation['suite_room_number'] }}" disabled>
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Number Deluxe
                        Room</label>
                    <input class="form-control rounded-xl bg-colorSecondary" type="text" name="deluxe_room_number"
                        id="deluxe_room_number"
                        value="{{ $dataReservation['deluxe_room_number'] }}" disabled>
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Number Standart
                        Room</label>
                    <input class="form-control rounded-xl bg-colorSecondary" type="text" name="standart_room_number"
                        id="standart_room_number"
                        value="{{ $dataReservation['standart_room_number']  }}" disabled>
                    <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Total
                        Price</label>
                    <input class="form-control rounded-xl bg-colorSecondary" type="text" name="totalPrice"
                        id="totalPrice" value="${{ $dataReservation['price'] }}" disabled>
                </ul>
            </div>
        </div>
        <button type="submit" class="mt-5 w-full">
            <a href="#_" class=" w-1/5 relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-colorThird transition duration-300 ease-out border-2 border-colorThird rounded-full shadow-md group">
            <span class="absolute inset-0 flex items-center justify-center w-full h-full text-colorSecondary duration-300 -translate-x-full bg-colorgreen group-hover:translate-x-0 ease">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </span>
            <span class="absolute flex items-center justify-center w-full h-full bg-colorThird text-colorText transition-all duration-300 transform group-hover:translate-x-full ease">Next</span>
            <span class="relative invisible">Next</span>
            </a>
          </button>
        </div>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @include('sweetalert::alert')
    @include('components.footerstaff')

</body>

</html>
