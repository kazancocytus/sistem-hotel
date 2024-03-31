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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @vite('resources/css/app.css')

</head>
<body class=" bg-colorgreen">
  @include('staff.sidebar')

    <div>
        <div class="font-josefin text-2xl font-semibold mx-40 mt-3 text-colorSecondary"> <i class="bi bi-people-fill mx-3 text-colorSecondary"></i>Information</div>
    </div>
    <form class=" w-11/12 mx-14 pb-5" action="{{ route('agent.info') }}" method="POST">
      <div class="block mt-6 w-4/5 mx-28 px-28 py-12 bg-colorSecondary border border-gray-200 rounded-2xl shadow row">
        @csrf
        <div class=" ">
              <label class=" form-label font-josefin text-xl font-medium mt-4" id="">NIP</label>
              <input class="form-control rounded-xl bg-colorPrimary" type="text" id="nip" name="nip" value="{{ old('nip') }}">
              <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Name</label>
              <input class="form-control rounded-xl bg-colorPrimary" type="text" id="name" name="name" value="{{ old('name') }}">
              <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Email</label>
              <input class="form-control rounded-xl bg-colorPrimary" type="text" id="email" name="email" value="{{ old('email') }}">
              <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Phone number</label>
              <input class="form-control rounded-xl bg-colorPrimary" type="text" id="phone" name="phone" value="{{ old('phonel') }}">
              <label class=" form-label font-josefin text-xl font-medium mt-4" id="">Birth Date</label>
              <input class="form-control rounded-xl bg-colorPrimary" type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}">
              </div>
              <button type="submit" class="mt-5 w-full">
                <a href="#_" class=" w-1/5 relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-colorThird transition duration-300 ease-out border-2 border-colorThird rounded-full shadow-md group">
                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-colorSecondary duration-300 -translate-x-full bg-colorgreen group-hover:translate-x-0 ease">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </span>
                <span class="absolute flex items-center justify-center w-full h-full bg-colorThird text-colorText transition-all duration-300 transform group-hover:translate-x-full ease">Next</span>
                <span class="relative invisible">Next</span>
                </a>
              </button>            
            </div>
          </div>
      </form>

             
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
 
 @include('sweetalert::alert')
 @include('components.footerstaff')

</body>
</html>