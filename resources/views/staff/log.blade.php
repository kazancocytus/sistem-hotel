<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log </title>
    <link rel="icon" href="{{asset('assets/evergreenlogobgcrop.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @vite('resources/css/app.css')

</head>
<body>
  @include('staff.sidebar')
    
      <div class="font-josefin text-2xl font-semibold mx-5 mt-5"> <i class="bi bi-people-fill mx-3"></i>LOG</div>
      <form action="">
          <div class="mx-20 mt-10 input-group rounded w-1/2">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button class=" w-10 bg-colorSecondary input-group-text border-0" id="search-addon">
              <i class="bi bi-search"></i>
            </button>
          </div>
      </form>
        <form action="">
        <table class="w-4/5 mx-20 mt-5 form-label font-josefin text-xl font-medium bg-amber-100 rounded-xl">
          <thead>
          <tr >
          <th class="p-4">No</th>
          <th class="p-4" >Name</th>
          <th class="p-4">Type Rooms</th>
          <th class="p-4">Number Rooms</th>
          <th class="p-4">Check In</th>
          <th class="p-4">Check Out</th>
          <th class="p-4">Status</th>
        </tr>
      </thead>
        <tbody>
          <td class="p-4">1</td>
          <td class="p-4">Haikal</td>
          <td class="p-4">Suite</td>
          <td class="p-4">06</td>
          <td class="p-4">24/01/2024</td>
          <td class="p-4">25/01/2024</td>
          <td class="p-4"><span class="badge text-bg-success">Checked In</span></td>
        </tbody>
        </table>
    </form>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
</body>
</html>