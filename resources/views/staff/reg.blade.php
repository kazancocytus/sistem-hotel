<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Evergreen hotel </title>
    <link rel="icon" href="{{asset('assets/evergreenlogobgcrop.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src=" {{asset('assets/hero2.jpg')}} " alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
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
            <div class="title">WELCOME TO EVERGREEN HOTELS</div>
          <form action="#">
            <div class="input-boxes">
              <div class="">
                <i class=""></i>
              </div>
              <div class="input-box">
                <i class=""></i>
              </div>
              <div class="text"><a href="#"></a></div>
              <div class="">
              </div>
              <div class="text sign-up-text"><label for="flip">Login now</label></div>
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
                <input type="email" id="email" name="email" placeholder="Enter your email" required class="@error('email') is-invalid @enderror" value="{{ old('email') }}" ">
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
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text"><label for="flip">Back</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>