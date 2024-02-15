<div class="bg-colorPrimary">
        <header class="fixed inset-x-0 top-0 z-50 bg-gradient-to-b from-colorgreen from-70% to-transparent">
            <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-3 p-3">
                        <img class="h-10 w-auto" src="{{ asset('assets/evergreenlogobgcrop.png') }}" alt=""><a
                            href="{{ route('home') }}" class="text-white self-center font-julius">EVERGREEN Hotel</a>
                    </a>
                </div>
                <div class="lg:flex lg:gap-x-20 justify-self-end">
                    <a href="{{ route('reservation') }}" class="text-sm font-josefin font-light leading-6 text-white">Reservation</a>
                    <a href="{{ route('contact') }}" class="text-sm font-josefin font-light leading-6 text-white">Contact</a>
                    <a href="{{ route('about') }}" class="text-sm font-josefin font-light leading-6 text-white">About</a>
                </div>


                @if (Route::has('login'))
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    @auth
                    <button  type="button" class="text-sm text-white"><a class="text-sm font-josefin font-semibold leading-6 text-white" href="{{ route('costumer.logout') }}">Log out</a><span aria-hidden="true">&rarr;</span></button>
                @else
                    <button type="button" class="text-sm font-josefin font-semibold leading-6 text-white" data-bs-toggle="modal" data-bs-target="#modalLogin">Log in <span aria-hidden="true">&rarr;</span aria-hidden=></button>
                    @endauth
                </div>
                @endif
            </nav>
    </div>
    

    {{-- Navbar Stop --}}

    {{-- Login Start --}}

    <!-- Modal -->
    <form action="{{ route('login') }}" method="POST">
    @csrf
    
    <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-3xl p-6">
                <div class="modal-header">
                    <h5 class="modal-title font-josefin text-4xl m-3" id="exampleModalLabel">Login To Your Account</h5>
                    <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"
                            style="font-size: 40px"></i></button>
                </div>
                <div class="modal-body">   
                        <div class="mb-3">
                            <label for="email" class="form-label font-josefin">Email</label>
                            <input type="text" class="form-control rounded-xl @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="Email" autofocus />
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label font-josefin">Password</label>
                            <input type="password" class="form-control rounded-xl" id="password" name="password"
                            placeholder="Password" autofocus/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="d-grid gap-3">
                            <button type="submit" class=" pt-2 font-josefin text-lg text-colorBg btn btn-success">LOGIN</button>
                            <h2
                                style="width: 100%; text-align: center; border-bottom: 1px solid #000; line-height: 0.1em; margin: 10px 0 20px;">
                                <span class="" style="background:#fff; padding:0 5px; font-size:10px;">OR</span>
                            </h2>
                            <button type="button" class=" pt-2 mb-2 font-josefin text-xs text-colorBg btn btn-success"
                                data-bs-toggle="modal" data-bs-target="#modalRegister">SIGN UP</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </form>

    {{-- Login Stop --}}

    {{-- Register Start --}}

    <div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-3xl p-6">
                <div class="modal-header">
                    <h5 class="modal-title font-josefin text-4xl m-3" id="exampleModalLabel">Create Your Account</h5>
                    <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"
                            style="font-size: 40px"></i></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="mb-3">
                            <label for="nip" class="form-label font-josefin">NIP</label>
                            <input type="text" class="form-control rounded-xl" id="nip" name="nip"
                                placeholder="Input Your NIP Here" autofocus/>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label font-josefin">Email</label>
                            <input type="email" class="form-control rounded-xl" id="email" name="email"
                                placeholder="Input Your Email Here" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label font-josefin">Phone Number</label>
                            <input type="text" class="form-control rounded-xl" id="phone" name="phone"
                                placeholder="Input Your Phone Number Here" />
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label font-josefin">Fullname</label>
                            <input type="text" class="form-control rounded-xl" id="name" name="name"
                                placeholder="Input Your Fullname Here" />
                        </div>
                        <div class="mb-3">
                            <label for="birth_date" class="form-label font-josefin">Birth Date</label>
                            <input type="date" class="form-control rounded-xl" id="birth_date" name="birth_date"
                                placeholder="Input Your Birth Date Here" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label font-josefin">Password</label>
                            <input type="password" class="form-control rounded-xl" id="password" name="password"
                                placeholder="Input Your Password Here" />
                        </div>
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label font-josefin">Confirm Password</label>
                            <input type="password" class="form-control rounded-xl" id="password-confirm" name="password_confirmation"
                                placeholder="Input Your Password Here" />
                        </div>
                        <div class="d-grid gap-3">
                            <button type="submit"
                                class=" pt-2 font-josefin text-lg text-colorBg btn btn-success">SIGN IN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Register Stop --}}
