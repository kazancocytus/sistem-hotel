<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservasi</title>
    <link rel="icon" href="{{ asset('assets/evergreenlogobgcrop.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @vite('resources/css/app.css')

</head>

<body class=" bg-colorgreen">
    @include('staff.sidebar')
    <div>
        <div class="font-josefin text-2xl font-semibold mx-40 mt-3 text-colorSecondary"><i class="bi bi-people-fill mx-3 text-colorSecondary"></i>Booking</div>
    </div>
    <form class="w-11/12 mx-14 pb-5" action="{{ route('reservation.agent') }}" method="post">
        <div class="block mt-6 w-4/5 mx-28 px-28 py-12 bg-colorSecondary border border-gray-200 rounded-2xl shadow row">
            @csrf
                <div class="w-full mb-5 flex flex-row justify-around">
                    <div class=" w-5/12 float-start">
                        <label class=" form-label font-josefin text-xl font-medium"> Check In</label>
                        <input class=" form-control rounded-xl bg-colorPrimary" type="date" name="check_in"
                            id="check_in" value="{{ old('check_in') }}">
                    </div>
                    <div class=" w-5/12 float-right">
                        <label class=" form-label font-josefin text-xl font-medium"> Check Out</label>
                        <input class=" form-control rounded-xl bg-colorPrimary" type="date" name="check_out"
                            id="check_out" value="{{ old('check_iut') }}">
                    </div>
                </div>
                <table class="w-full mt-2 form-label font-josefin text-xl font-medium bg-colorSecondary">
                    <tr class=" border-b-4 border-colorThird">
                        <th class="text-left">Type Rooms </th>
                        <th class="text-right">Number Of Rooms</th>
                    </tr>
                    <tr class="border-b-2 border-colorThird">
                        <td class="pt-10">Deluxe</td>
                        <td class="text-right"><input class= "border-none bg-colorPrimary rounded-xl" type="text"
                                id="deluxe" name="deluxe" onchange="calculateTotal()" value="0"></td>
                    </tr>
                    <tr class="border-b-2 border-colorThird">
                        <td class="pt-10">Suite</td>
                        <td class="text-right"><input class="border-none bg-colorPrimary rounded-xl" type="text"
                                id="suite" name="suite" onchange="calculateTotal()" value="0"></td>
                    </tr>
                    <tr class="border-b-2 border-colorThird">
                        <td class="pt-10">Standar</td>
                        <td class="text-right"><input class="border-none bg-colorPrimary rounded-xl" type="text"
                                id="standart" name="standart" onchange="calculateTotal()" value="0"></td>
                    </tr>
                    <tr class="border-b-2 border-colorThird">
                        <td class="pt-14 font-black">Total</td>
                        <td class="text-right align-bottom pb-2"><input class="border-none bg-colorPrimary rounded-xl" type="text"
                                id="totalPrice" name="totalPrice" disabled require value="$0"></td>
                    </tr>
                </table>
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
        </div>
    </form>
    <script type="text/javascript">
        function calculateTotal() {
            // console.log('Calculate total called');

            const checkInDateString = document.getElementById('check_in').value;
            const checkOutDateString = document.getElementById('check_out').value;
            var deluxeRooms = parseInt(document.getElementById('deluxe').value) || 0;
            var suiteRooms = parseInt(document.getElementById('suite').value) || 0;
            var standardRooms = parseInt(document.getElementById('standart').value) || 0;
            var deluxePrice = 399;
            var suitePrice = 299;
            var standardPrice = 199;

            if (isNaN(deluxeRooms) || isNaN(suiteRooms) || isNaN(standardRooms)) {
                alert('Please enter valid numbers for rooms');
                return;
            }

            console.log(checkInDateString)


            var checkInDate = new Date(Date.parse(checkInDateString));
            var checkOutDate = new Date(Date.parse(checkOutDateString));

            // console.log(checkInDate)


            if (checkInDate.getTime() > checkOutDate.getTime()) {
                alert('Check-out date should be greater than check-in date');
                return;
            }

            var daysDifference = Math.ceil((checkOutDate - checkInDate) / (1000 * 3600 * 24));

            let totalPrice = (deluxeRooms * deluxePrice + suiteRooms * suitePrice + standardRooms * standardPrice) *
                daysDifference;
            
            document.getElementById('totalPrice').value = ('$'+totalPrice);
            console.log('$'+totalPrice);
        }

        document.getElementById('check_in').addEventListener('change', calculateTotal);
        document.getElementById('check_out').addEventListener('change', calculateTotal);
    </script>


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
