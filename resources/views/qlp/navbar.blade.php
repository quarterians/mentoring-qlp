<header class="bg-white header">
    <div class="container">
        <div class="flex justify-between align-items-center">
            <div class="flex align-items-center">
                <!-- <div class="logo">
                    <img src="{{ asset('/qlp/img/qlp_logo.png') }}" alt="" class="">
                </div> -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('/qlp/img/logo/logo-QLP.png') }}" height="50px" width="auto" alt="QLP Logo">
                </a>

            </div>
            <div class="d-flex align-items-center justify-content-end">
                <div class="ms-3 mr-5">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="{{ url('/dev') }}" class="{{ Request::is('dev') ? 'active' : ''}} text-dark fw-semibold">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-dark fw-semibold" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan <i class="fas ms-1 fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="{{ Request::is('dev/searchmentor') ? 'active' : ''}} dropdown-item" href="/dev/searchmentor">Konsultasi</a></li>
                                <li><a class="dropdown-item" href="#">Webinar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-dark fw-semibold" href="#" role="button" id="dropdownMenu2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Petunjuk <i class="fas ms-1 fa-caret-down"></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><a class="dropdown-item"
                                        href="https://docs.google.com/presentation/d/1rQ2hxmdz744dqFMUXvTGHLQd8dN2r46AZ8zBmCDo0kc/edit#slide=id.g103aa5dede7_0_219" target="_blank">Cara
                                        Konsul</a></li>
                                <li><a class="{{ Request::is('#') ? 'active' : ''}} dropdown-item" href="#">Klaim Sertifikat</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/dev/FAQ') }}" class="{{ Request::is('dev/FAQ') ? 'active' : ''}} text-dark fw-semibold">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="{{ Request::is('#') ? 'active' : ''}} text-dark fw-semibold">Tentang Kami</a>
                        </li>

                        @auth
                        <li class="nav-item nav-item-mobile">
                            <a class="nav-link font-weight-bold" href="{{ route('setting.profile') }}">Edit
                                Profil</a>
                        </li>
                        <li class="nav-item nav-item-mobile">
                            <a class="nav-link font-weight-bold" href="{{ route('setting.account') }}">Edit Akun</a>
                        </li>
                        @endauth
                    </ul>

                </div>
                <div class="flex ml-3">
                    @guest
                    {{-- <div class="mt-sm-2 pb-sm-2 w-sm-100">
                                <a href="{{ route('login') }}"
                    class="btn btn-primary shadow-sm text-center fw-semibold w-sm-100 align-items-end">Menjadi
                    Mentor</a>
                </div> --}}
                <div class="nav-item mt-sm-2 pb-sm-2 w-sm-100">
                    <a href="https://forms.gle/8naQ2nKHC3HeWRp87"
                        class="btn btn-primary shadow-sm text-center fw-semibold w-sm-100 align-items-end" target="_blank">Menjadi
                        advisor</a>
                </div>
                @else
                <div class="mt-sm-2 pb-sm-2 w-sm-100 nav-item-mobile">
                    <a href="{{ route('logout') }}" class="btn shadow-sm text-center fw-semibold w-sm-100"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                        Out</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
    </div>
</header>
