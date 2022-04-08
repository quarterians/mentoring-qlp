<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mentoring QLP</title>
    {{-- Bootstrap --}}
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('/css/style-rama.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/profile_style.css') }}" />


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.qeditor.js') }}" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/e5d58c1a7c.js" crossorigin="anonymous"></script>    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/jquery.qeditor.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="QLP Logo" style="width:40px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->                                             
                    <ul class="navbar-nav mr-auto">                                                                     
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ route('home') }}">Home</a>                                
                        </li>    
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ route('mentors') }}">Mentors</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ route('guide') }}">Guides</a>
                        </li>                        
                    @auth      
                        <li class="nav-item nav-item-mobile">
                            <a class="nav-link font-weight-bold" href="{{ route('setting.profile') }}">Edit Profil</a>
                        </li>    
                        <li class="nav-item nav-item-mobile">
                            <a class="nav-link font-weight-bold" href="{{ route('setting.account') }}">Edit Akun</a>
                        </li>                                                                    
                    @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{ route('login') }}"><button class="btn btn-danger text-light" style="width:80px">Masuk</button></a>
                            </li>                                                      
                        @else
                            <li class="nav-item nav-item-mobile">                                
                                <a class="nav-link font-weight-bold" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <button class="btn btn-primary text-light" style="width:80px">Log Out</button>
                                </a>                                    

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>                                
                            </li>

                            <li class="nav-item nav-item-dekstop dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if(!is_null(Auth::user()->profile_picture))
                                        <img src="{{ asset('img/uploads/'.Auth::user()->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:40px">
                                    @else
                                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%; width:40px">                        
                                    @endif
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('mentorDetail', Auth::user()->id) }}">Profil</a>
                                    <a class="dropdown-item" href="{{ route('setting.profile') }}">Pengaturan</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if (Request::is('mentors/*') || Request::is('home') || Request::is('login') || Request::is('register'))
            <main>    
        @else
            <main class="py-4">
        @endif                
            @yield('content')
        </main>        

        <footer>

            {{-- <p><b>QUARTER LIFE PROJECTS TEAM</b><br>Copyright © 2021 Quarter Life Projects</p> --}}

            {{-- <div class="row mt-3"> --}}

            <div class="container">

                <div class="row banner-footer">
                    {{-- LOGO QLP FOOTER --}}
                    <div class="col">
                        <div class="row">
                            <img src="{{ asset('img/logo.png') }}" alt="QLP Logo" style="width:60px">
                            <span id="footer-title">Quarter Life Projects</span>
                            <p class="text-white text-left">
                                Platform sosial yang didirikan pada 27 Maret 2021 
                                dengan misi untuk menjadi sistem pendukung bagi generasi Z 
                                selama masa Quarter Life Crisis mereka. 
                            </p>
                        </div>
                    
                        <div class="row">
                            <label><strong>Email</strong></label>
                            <p class="text-white">quarterlife.projects@gmail.com </p>
                        </div>
                        <div class="row">
                            <label><strong>Contact Us</strong></label>
                            {{-- logonya socialsnya mana??? --}}
                        </div>
                    </div>

                    {{-- ABOUT US --}}
                    <div class="col mt-3">
                        <div class="row">
                            <label class="label-footer-header"><strong>About Us</strong></label>

                            <ul class="list-footer-menu">
                                <li>
                                    <a href="#!" class="nav-link text-white">Visi</a>
                                </li>
                                <li>
                                    <a href="#!" class="nav-link text-white">Misi</a>
                                </li>
                                <li>
                                    <a href="#!" class="nav-link text-white">QLP Pilar</a>
                                </li>
                                <li>
                                    <a href="#!" class="nav-link text-white">Meet Our Team</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- PROGRAM --}}
                    <div class="col mt-3">
                        <div class="row">
                            <label class="label-footer-header"><strong>Program</strong></label>
                        </div>
                        <div class="row">
                            <ul class="list-footer-menu">
                                <li>
                                    <a href="#!" class="nav-link text-white">Weekly Webinar</a>
                                </li>
                                <li>
                                    <a href="#!" class="nav-link text-white">Quarterlife Mentoring</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- PARTNERSHIP --}}
                    <div class="col mt-3">
                        <div class="row">
                            <label class="label-footer-header"><strong>Partnership</strong></label>
                        </div>
                        <div class="row">
                            <ul class="list-footer-menu">
                                <li>
                                    <a href="#!" class="nav-link text-white">Informasi Partnership</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- BANTUAN --}}
                    <div class="col mt-3">
                        <div class="row">
                            <label class="label-footer-header"><strong>Bantuan</strong></label>
                        </div>
                        <div class="row">
                            <ul class="list-footer-menu">
                                <li>
                                    <a href="#!" class="nav-link text-white">FAQ</a>
                                </li>
                                <li>
                                    <a href="#!" class="nav-link text-white">Guide</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                
            </div>
            
            {{-- </div> --}}

            <div class="sub-footer">
                <div class="p-4">
                    <div class="row justify-content-center">
                        <small class="text-center text-white">
                            QUARTER LIFE PROJECTS TEAM
                        </small>
                    </div>
                    <div class="row justify-content-center">
                        <small class="text-center text-white">
                            Copyright © Quarterians 2022 Quarter Life Projects
                        </small>
                    </div>
                </div>
               
            </div>

        </footer>
    </div>    
</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

  accordionItemHeaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", event => {
      
      // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
      
      // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
      // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
      //   currentlyActiveAccordionItemHeader.classList.toggle("active");
      //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
      // }

      accordionItemHeader.classList.toggle("active");
      const accordionItemBody = accordionItemHeader.nextElementSibling;
      if(accordionItemHeader.classList.contains("active")) {
        accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
      }
      else {
        accordionItemBody.style.maxHeight = 0;
      }
      
    });
  });
</script>
