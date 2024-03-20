<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservasi</title>
    <link rel="icon" href="{{asset('assets/evergreenlogobgcrop.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @vite('resources/css/app.css')

</head>
<body>
  @include('staff.sidebar')
  <div>
        <div class="font-josefin text-2xl font-semibold mx-3 mt-3"> <i class="bi bi-people-fill mx-3"></i>Booking</div>
    </div>
    <form class="w-3/4 mx-28 pb-5" action="{{ route('reservation.agent') }}" method="post">
      @csrf
    <div class="">
      <div class="w-3/5 mb-10 ">
        <div class=" w-5/12 float-start mb-10">
        <label class=" form-label font-josefin text-xl font-medium"> Check In</label>
        <input class=" form-control rounded-xl bg-amber-100"  type="date" name="check_in" id="check_in">
      </div> 
      <div class=" w-5/12 float-right mb-10 "> 
        <label class=" form-label font-josefin text-xl font-medium" > Check Out</label>
        <input class=" form-control rounded-xl bg-amber-100" type="date" name="check_out" id="check_out" >
      </div>
    </div>
  


      <div>
        <table class="w-3/4 mt-5 form-label border-y-2  border-x-2 font-josefin text-xl font-medium bg-amber-100 border-color-black">
          <tr >
          <th class="p-4">Type Rooms </th>
          <th>Number Of Rooms</th>
        </tr>
        <tr>
          <td class="p-4">Deluxe</td>
          <td><input class= "border-none bg-amber-50 rounded-xl" type="number" id="deluxe" name="deluxe" onchange="calculateTotal()" value="0"></td>
        </tr> 
        <tr>
          <td class="p-4">Suite</td>
          <td><input class="border-none bg-amber-50 rounded-xl" type="number" id="suite" name="suite" onchange="calculateTotal()" value="0"></td>
        </tr>
        <tr> 
          <td class="p-4">Standar</td>
          <td><input class="border-none bg-amber-50 rounded-xl" type="number" id="standart" name="standart" onchange="calculateTotal()" value="0"></td>
        </tr>
        <tr>
          <td class="p-4 font-black">Total</td>
          <td>$<input class="border-none bg-amber-50 rounded-xl" type="number" id="totalPrice" name="totalPrice" disabled require></td>
        </tr>
        </table>
        <button type="submit" class="text-white bg-yellow-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">NEXT</button>
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

        var totalPrice = (deluxeRooms * deluxePrice + suiteRooms * suitePrice + standardRooms * standardPrice) * daysDifference;

        document.getElementById('totalPrice').value = totalPrice;
        console.log(totalPrice);
    }

    document.getElementById('check_in').addEventListener('change', calculateTotal);
    document.getElementById('check_out').addEventListener('change', calculateTotal);

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
 
 @include('sweetalert::alert')    
</body>
</html>
