<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Gas Detect</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{asset ('asssets/img/favicon.png')}}" rel="icon">
    <link href="{{asset ('asssets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset ('asssets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset ('asssets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset ('asssets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset ('asssets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset ('asssets/vendor/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
    <!--   <link href="asssets/vendor/owl.carousel/asssets/owl.carousel.min.css" rel="stylesheet">
 -->
    <link href="{{asset ('asssets/vendor/venobox/venobox.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset ('asssets/css/style.css')}}" rel="stylesheet">

</head>

<body class="antialiased">
    <div class="">
        <!-- <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand font-italic" style="color:red" href="#">
                <h1> Gas Detect </h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <!-- Cualquier cosa despues del icono

                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        @if (Route::has('login'))
                        <div class="">
                            @auth


                            <a href="{{ url('/home') }}" class="btn btn-outline-danger btn-lg " role="button"
                                aria-pressed="true">Sistema de gestión</a>


                            @else
                            <a href="{{ route('login') }}" class="btn btn-outline-danger btn-lg mr-1">Login</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-danger btn-lg ">Register</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </li>
                </ul>

            </div>
        </nav> -->

        <div id="app">            
            <router-view></router-view>
        </div>

        <script src="{{asset ('js/app.js')}}"></script>

        <!-- Vendor JS Files -->
        <script src="{{asset ('asssets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset ('asssets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset ('asssets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset ('asssets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{asset ('asssets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset ('asssets/vendor/counterup/counterup.min.js')}}"></script>
        <script src="{{asset ('asssets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
        <script src="{{asset ('asssets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset ('asssets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset ('asssets/vendor/venobox/venobox.min.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset ('asssets/js/main.js')}}"></script>
</body>

</html>
