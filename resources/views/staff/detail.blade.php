<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link rel="icon" href="{{asset('assets/evergreenlogobgcrop.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')

</head>
<body>
  @include('staff.sidebar')
    
    <div>
        <div class="font-josefin text-2xl font-semibold mx-3 mt-3"> <i class="bi bi-people-fill mx-3"></i>Detail Order</div>
    </div>
        <form action="{{ route('reservation.payment') }}" method="POST">
          @csrf
          <div class=" w-4/5 mx-28">
            <div class=" container">
            <div class=" mb-10 row w-full  mt-10 float-start " action="">
                <div class=" w-1/4 float-right">
                <label class=" form-label font-josefin text-xl font-medium" id=""> Check In</label>
                <input class="form-control rounded-xl bg-amber-100" disabled type="date" name="check_in" id="check_in" value="{{ $dataReservation['check_in'] }}">
              </div>
              <div class=" w-1/4 float-right">
                <label class=" form-label font-josefin text-xl font-medium" id=""> Check Out</label>
                <input class=" form-control rounded-xl bg-amber-100" disabled type="date" name="check_out" id="check_out" value="{{ $dataReservation['check_out'] }}">
              </div>
            </div>
          </div>
          </div>
          <div class="card w-1/2 mx-28">
            <div class="card-body">
          <h5 class="card-title font-josefin text-xl font-bold">Costumer</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">NIP : <input type="text" name="nip" id="nip" value="{{ $infoCostumer['nip'] }}" disabled></li>
            <li class="list-group-item">Name : <input type="text" name="name" id="name" value="{{ $infoCostumer['name'] }}" disabled></li>
            <li class="list-group-item">Email : <input type="email" name="email" id="email" value="{{ $infoCostumer['email'] }}" disabled></li>
            <li class="list-group-item">Phone Number : <input type="text" name="phone" id="phone" value="{{ $infoCostumer['phone'] }}" disabled></li>
            <li class="list-group-item">Birth date : <input type="date" name="birth_date" id="birth_date" value="{{ $infoCostumer['birth_date'] }}" disabled></li>
          </ul>
          </div>
       </div> 
        <div class="card w-1/2 mt-12 mx-28">
          <div class="card-body">
        <h5 class="card-title font-josefin text-xl font-bold">Booking Details</h5>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">No Reservation : <input type="text" name="no_reservation" id="no_reservation" value="{{ $dataReservation['no_reservation'] }}" disabled></li>
          <li class="list-group-item">Suite Rooms : <input type="text" name="suite" id="suite" value="{{ $dataReservation['suite'] }}" disabled></li>
          <li class="list-group-item">Deluxe Rooms : <input type="text" name="deluxe" id="deluxe" value="{{  $dataReservation['deluxe'] }}" disabled></li>
          <li class="list-group-item">Standart Rooms : <input type="text" name="standart" id="standart" value="{{ $dataReservation['standart'] }}" disabled></li>
          <li class="list-group-item">Number Suite Room : <input type="text" name="suite_room_number" id="suite_room_number" value="{{ implode(',', json_decode($dataReservation['suite_room_number'])) }}" disabled></li>
          <li class="list-group-item">Number Deluxe Room :<input type="text" name="deluxe_room_number" id="deluxe_room_number" value="{{ implode(',', json_decode($dataReservation['deluxe_room_number'])) }}" disabled></li>
          <li class="list-group-item">Number Standart Room :<input type="text" name="standart_room_number" id="standart_room_number" value="{{ implode(',', json_decode($dataReservation['standart_room_number'])) }}" disabled></li>
          <li class="list-group-item">Total Price : <input type="text" name="totalPrice" id="totalPrice" value="${{ $dataReservation['price'] }}" disabled></li>
        </ul>
        </div>
    </div>  
  </div><button type="submit" class="text-white bg-yellow-800 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800  mx-28 mt-5 float-right ">SUBMIT</button>
      </form>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
 
 @include('sweetalert::alert')
</body>
</html> 