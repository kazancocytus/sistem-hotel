<nav class="static navbar fixed-top bg-amber-100" style="width: 100%; height: 10%;">
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <a class="navbar-brand" href="#"></a>
    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 15%; background: #FFFFEC" >
      <div class="offcanvas-header">
        <i class="bi bi-x text-4xl text-center cursor-pointer" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></i>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="container">
              <img class="col-1 align-items-center w-full" src="{{asset('assets/evergreenlogobg.png')}}" />
          </li>
          <li class=" font-josefin nav-item my-2">
            <a class="nav-link" href="{{ route('index.staff') }}"><i class="bi bi-house-fill mx-2"></i>Home</a>
          </li>
          <li class="font-josefin nav-item my-2">
            <a class="nav-link" href="{{ route('agent.reservation') }}"><i class="bi bi-calendar-check-fill mx-2"></i>Reservasi</a>
          </li>
          <li class="font-josefin nav-item my-2">
            <a class="nav-link" href="{{ route('log.costumer') }}"><i class="bi bi-arrow-left-right mx-2"></i>Log</a>
          </li>
          <li class="font-josefin nav-item my-2">
            <a class="nav-link" href="{{ route('agent.logout') }}"><i class="bi bi-box-arrow-in-left mx-2"></i>Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
