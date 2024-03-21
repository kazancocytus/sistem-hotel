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
<body>
    @include('staff.sidebar')

    <div class="font-josefin text-2xl font-semibold mx-5 mt-5"> <i class="bi bi-people-fill mx-3"></i>LOG</div>
    <form action="{{ route('log.costumer') }}" method="GET">
        <div class="mx-20 mt-10 input-group rounded w-1/2">
            <input type="text" name="search" id="search" class="form-control rounded" placeholder="Search"
                aria-label="Search" aria-describedby="search-addon" />
            <button class=" w-10 bg-colorSecondary input-group-text border-0" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </div>
      </form>
        <div class="font-josefin text-2xl font-semibold mx-5 mt-5">{{ $count }} Available Room</div>
      <table class="w-4/5 mx-20 mt-5 form-label font-josefin text-xl font-medium bg-amber-100 rounded-xl">
        <thead>
          <tr>
            <th class="p-4">No Reservation</th>
            <th class="p-4">Name</th>
            <th class="p-4">Suites Room</th>
            <th class="p-4">Deluxe Room</th>
            <th class="p-4">Standard Room</th>
            <th class="p-4">Suites Number Room</th>
            <th class="p-4">Deluxe Number Room</th>
            <th class="p-4">Standard Number Room</th>
            <th class="p-4">Check In</th>
            <th class="p-4">Check Out</th>
            <th class="p-4">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($transactions as $list => $transaction)
          <tr>
            <td class="p-4">{{ $transaction->no_reservation }}</td>
            <td class="p-4">{{ $transaction->name }}</td>
            <td class="p-4">{{ $transaction->suite }}</td>
            <td class="p-4">{{ $transaction->deluxe }}</td>
            <td class="p-4">{{ $transaction->standart }}</td>
            <td class="p-4">{{ json_encode($transaction->suite_room_number) }}</td>
            <td class="p-4">{{ json_encode($transaction->deluxe_room_number) }}</td>
            <td class="p-4">{{ json_encode($transaction->standart_room_number) }}</td>
            <td class="p-4">{{ $transaction->check_in }}</td>
            <td class="p-4">{{ $transaction->check_out }}</td>
            <td class="p-4">
              <span class="badge {{ $transaction->check_out >= now()->subday()->startOfDay() ? 'badge text-bg-success' : 'text-bg-warning' }}">{{ $transaction->check_out >= now()->subDay()->startOfDay() ? 'Checked In' : 'Checked Out' }}</span>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>



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
</body>

</html>
