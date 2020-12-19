<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}" defer></script>
    <script src="{{ asset('js/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}" defer></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}" defer></script>
    <script src="{{ asset('js/scrollax.min.js') }}" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/2b6fc70c75.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/open-iconic-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.timepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Vacation<span>Travel Agency</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}"
                                                                                class="nav-link">Home</a></li>
                <li class="nav-item {{ Route::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}"
                                                                                 class="nav-link">About</a></li>
                <li class="nav-item {{ Route::is('destination') ? 'active' : '' }}"><a href="{{ route('destination') }}"
                                                                                       class="nav-link">Destination</a>
                </li>
                <li class="nav-item {{ Route::is('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}"
                                                                                class="nav-link">Blog</a></li>
                <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}"
                                                                                   class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

@include('layouts.footer')

</body>
</html>
