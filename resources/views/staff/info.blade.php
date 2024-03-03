<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info</title>
    <link rel="icon" href="{{asset('assets/evergreenlogobgcrop.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')

</head>
<body>
  @include('staff.sidebar')

        <div >
        <div class="font-josefin text-2xl font-semibold mx-3 mt-3"> <i class="bi bi-people-fill mx-3"></i>  Information</div>
    </div>
    <form class=" w-3/4 mx-28 py-5" action="">
      <div class=" container">
        <div class=" ">
            <form class=" w-3/4 mx-28 py-5" action=" ">
                <label class=" form-label font-josefin text-xl font-medium mt-5" id="">Name</label>
              <input class="form-control rounded-xl bg-amber-100" type="text" id=" " value="">
              <label class=" form-label font-josefin text-xl font-medium mt-5" id="">Email</label>
              <input class="form-control rounded-xl bg-amber-100" type="text" id=" " value="">
              <label class=" form-label font-josefin text-xl font-medium mt-5" id="">Phone number</label>
              <input class="form-control rounded-xl bg-amber-100" type="text" id=" " value="">
              <label class=" form-label font-josefin text-xl font-medium mt-5" id="">Birth Date</label>
              <input class="form-control rounded-xl bg-amber-100" type="date" id=" " value="">
            </form>
              </div>
            </div>
          </div><button type="button" class="text-white bg-yellow-800 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 float-right "><a href="{{ route('payment.reservation') }}">NEXT</button>

            </div>
            
          </form>
             
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
</body>
</html>