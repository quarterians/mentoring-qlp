<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mentoring QLP</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.qeditor.js') }}" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/e5d58c1a7c.js" crossorigin="anonymous"></script>    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.qeditor.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <style>
        main{
            height: 90vh;
        }
        footer {            
            bottom:0;
            width:100%;
            height:80px;
            background:#2A5F72;
            text-align: center;
            color: white;            
            font-weight: 500;                   
        }    
    </style>
</head>
<body>
    <div id="app">
        <main class="pb-sm-5 py-lg-5">
            <div class="jumbotron">
                <div class="container px-3 mx-auto row">        
                    <div class="col-lg-6"  style="padding-top: 5%">
                        <h1 class="font-weight-bolder" id="jumbotron-heading">Quarters Life Projects is Under Maintenance!</h1>
                        <p style="font-size: 18px text-justify">Layanan 1-on-1 consulting dengan mentor sedang ditutup. <br>Tunggu re-launch kami di Bulan Maret 2022 ya. <br>See you..<br>By: Quarter Life Projects Team</p>
                        <br>
                    </div>
                    <div class="col-lg-6 px-auto" style="padding-left: 10%">
                        <img src="{{ asset('img/jumbotron-home.png') }}" alt="Foto profil"  class="w-100 img-home">
                    </div>
                </div>
            </div>
        </main>        
        <footer class="py-3">
            <p><b>QUARTER LIFE PROJECTS TEAM</b><br>Copyright © 2021 Quarter Life Projects</p>
        </footer>
    </div> 
</body>
</html>
