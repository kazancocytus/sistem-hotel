<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')

</head>
<body>
  <nav class="static navbar fixed-top" style="width: 100%; height: 10%; background:#C6A969;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <a class="navbar-brand" href="#"></a>
      
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 15%; background: #FFFFEC" >
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="container">
                <img class="col-1 align-items-center" style=" width: 60%; height: 60%" src="{{asset('assets/evergreenlogobg.png')}}" />
            </li>
            <li class=" font-josefin nav-item my-2">
              <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill mx-2"></i>Home</a>
            </li>
            <li class="font-josefin nav-item my-2">
              <a class="nav-link" href="#"><i class="bi bi-calendar-check-fill mx-2"></i>Reservasi</a>
            </li>
            <li class="font-josefin nav-item my-2">
                <a class="nav-link" href="#"><i class="bi bi-arrow-left-right mx-2"></i>Log</a>
              </li>
          </ul>
        </div>
      </div>
    </div>
</nav>
  
      <div >
        <div class="font-josefin text-2xl font-semibold mx-3 mt-3"> <i class="bi bi-people-fill mx-3"></i>  Information</div>
    </div>
    <form class="card w-3/4 mx-28 py-5 float-start" action="">
      <div class=" container">
        <div class="card-body row">
            <form class=" w-2/5 ml-14 py-2" action=" ">
                <label class=" form-label font-josefin text-xl font-medium mt-5" id="">Name</label>
              <input class="form-control rounded-xl bg-amber-100 w-2/5" type="text" id=" " value="">
              <label class=" form-label font-josefin text-xl font-medium mt-5" id="">Email</label>
              <input class="form-control rounded-xl bg-amber-100 w-2/5" type="text" id=" " value="">
              <label class=" form-label font-josefin text-xl font-medium mt-5" id="">Phone number</label>
              <input class="form-control rounded-xl bg-amber-100 w-2/5" type="text" id=" " value="">
              <label class=" form-label font-josefin text-xl font-medium mt-5" id="">Birth date</label>
              <input class="form-control rounded-xl bg-amber-100" type="text" id=" " value="">
              <div class="card mt-5 w-1/3 float-right">
                <img src=" assets/deluxe.jpg" class="card-img-top mt-3" alt="...">            
                <div class="card-body">  
                  <h5 class="card-title">BOOKING</h5>
                  <p class="card-text">
                    <label class=" form-label font-josefin text-center font-medium" id=""> Check In</label>
                    <input class=" form-control rounded-x"  type="date" name="" id="">
                    <label class=" form-label font-josefin text-center font-medium" id=""> Check Out</label>
                    <input class=" form-control rounded-x" type="date"  name="" id="">
                  <a href="#" class="btn bg-colorSecondary mt-3">Payment</a>
                </div>
              </div>
            </div>
          </form>
             
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
</body>
</html>