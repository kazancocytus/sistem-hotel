<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
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
                    <img class="col-1 align-items-center" style=" width: 60%; height: 100%" src="{{asset('assets/evergreenlogobg.png')}}" />
                </li>
                <li class=" font-josefin nav-item my-2">
                  <a class="nav-link active" aria-current="page" href="{{ route('index.staff') }}"><i class="bi bi-house-fill mx-2"></i>Home</a>
                </li>
                <li class="font-josefin nav-item my-2">
                  <a class="nav-link" href="{{ route('agent.reservation') }}"><i class="bi bi-calendar-check-fill mx-2"></i>Reservasi</a>
                </li>
                <li class="font-josefin nav-item my-2">
                    <a class="nav-link" href="{{ route('log.costumer') }}"><i class="bi bi-arrow-left-right mx-2"></i>Log</a>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      
      <section id="hero" class="px-0">
      <div class="contrainer text-white" style="text-align: center">
      <div class="hero-title">
            <div class="hero-text"> WELCOME TO <br> EVERGREEN HOTEL</div>
      </div>
      </div>
      </section>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
</body>
</html>