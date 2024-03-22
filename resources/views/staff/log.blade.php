<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log </title>
    <link rel="icon" href="{{ asset('assets/evergreenlogobgcrop.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @vite('resources/css/app.css')

</head>
<body class=" bg-colorgreen">
    @include('staff.sidebar')

    <div class="font-josefin text-2xl font-semibold mx-5 mt-3 text-colorSecondary"> <i class="bi bi-people-fill mx-3 text-colorSecondary"></i>LOG</div>
    <div class="block my-6 w-11/12 mx-14 px-16 py-12 bg-colorSecondary border border-gray-200 rounded-2xl shadow row">
    <form action="{{ route('log.costumer') }}" method="GET">
        <div class="input-group rounded w-1/2">
            <input type="text" name="search" id="search" class="form-control rounded" placeholder="Search By Name"
                aria-label="Search" aria-describedby="search-addon" />
            <button class=" w-10 bg-colorSecondary input-group-text border-0" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </div>
      </form>
      <div class="font-josefin w-1/4 text-2xl font-semibold mt-5 border-b-4 border-colorThird">Available {{ $count }} Room</div>
      <table class="w-full mt-5 form-label font-josefin text-xs font-medium bg-colorSecondary rounded-xl">
        <thead>
          <tr class=" border-b-4 border-colorThird">
            <th class="px-2">No Reservation</th>
            <th class="px-2">Name</th>
            <th class="px-2">Suites Room</th>
            <th class="px-2">Deluxe Room</th>
            <th class="px-2">Standard Room</th>
            <th class="px-2">Suites Number Room</th>
            <th class="px-2">Deluxe Number Room</th>
            <th class="px-2">Standard Number Room</th>
            <th class="px-2">Check In</th>
            <th class="px-2">Check Out</th>
            <th class="px-2">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($transactions as $list => $transaction)
          <tr class="border-b-2 border-colorThird">
            <td class="p-3 border-r-2 border-colorThird">{{ $transaction->no_reservation }}</td>
            <td class="p-3 border-r-2 border-colorThird">{{ $transaction->name }}</td>
            <td class="p-3 border-r-2 border-colorThird">{{ $transaction->suites }}</td>
            <td class="p-3 border-r-2 border-colorThird">{{ $transaction->deluxe }}</td>
            <td class="p-3 border-r-2 border-colorThird">{{ $transaction->standart }}</td>
            <td class="p-3 border-r-2 border-colorThird">{{ json_encode($transaction->suite_room_number) }}</td>
            <td class="p-3 border-r-2 border-colorThird">{{ json_encode($transaction->deluxe_room_number) }}</td>
            <td class="p-3 border-r-2 border-colorThird">{{ json_encode($transaction->standart_room_number) }}</td>
            <td class="p-3 border-r-2 border-colorThird">{{ $transaction->check_in }}</td>
            <td class="p-3 border-r-2 border-colorThird">{{ $transaction->check_out }}</td>
            <td class="p-3">
              <span class="badge {{ $transaction->check_out >= now()->subday()->startOfDay() ? 'badge text-bg-success' : 'text-bg-warning' }}">{{ $transaction->check_out >= now()->subDay()->startOfDay() ? 'Checked In' : 'Checked Out' }}</span>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


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
