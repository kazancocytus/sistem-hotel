<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Evergreen hotel </title>
    <link rel="icon" href="{{asset('assets/evergreenlogobgcrop.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src=" {{asset('assets/hero2.jpg')}} " alt="">
        <div class="text">
          <span class="text-1">Welcome back <br> to our workplace adventure! <br> Let's make today one to remember!</span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">  
          <div class="login-form">
            <div class="title mt-10">WELCOME TO EVERGREEN HOTELS</div>
          <form action="#">
            <div class="input-boxes">
              <div class="font-josefin font-light text-lg">Good morning, team! As the sun rises, so does our opportunity to shine. Welcome to another day of collaboration, growth, and success. Let's make today amazing together!</div>
              <a class="relative inline-block text-lg group mx-48 mt-20">
                <span class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-colorgreen transition-colors duration-300 ease-out border-2 border-colorThird rounded-lg group-hover:text-colorPrimary">
                <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-colorText"></span>
                <span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-colorThird group-hover:-rotate-180 ease"></span>
                <span class="relative"><label for="flip">Login Now</label></span>
                </span>
                <span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-colorgreen rounded-lg group-hover:mb-0 group-hover:mr-0" data-rounded="rounded-lg"></span>
                </a>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Login</div>
        <form action="{{ route('login') }}" method="post">
        @csrf
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="email" id="email" name="email" placeholder="Enter your email" required class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Enter your password" required class="@error('password') is-invalid @enderror">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="button input-box">
                <input type="submit" value="Login">
              </div>
              <div class="text sign-up-text"><label for="flip">Back</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
 
 @include('sweetalert::alert')
</body>
</html>