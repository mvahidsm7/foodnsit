<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>ADMIN</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('') }}assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="/">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="/">Beranda</a></li>
                                <li><a href="/admin/menu">Menu</a></li>
                                <li><a href="/data-pesanan">Pesan</a></li>
                                <li><a href="/tentang">Tentang Kami</a></li>
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href={{ Auth::user() ? '/profil' : '/login' }}>
                                            <i class="bi bi-person-fill">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                </svg>
                                                @if (Auth::user() == true)
                                                    {{ Auth::user()->name }}
                                                @else
                                                    Masuk
                                                @endif

                                            </i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- content area -->
    @yield('content')
    <!-- end content area -->

    <!-- jquery -->
    <script src="{{ asset('') }}assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="{{ asset('') }}assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="{{ asset('') }}assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="{{ asset('') }}assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="{{ asset('') }}assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="{{ asset('') }}assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="{{ asset('') }}assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="{{ asset('') }}assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="{{ asset('') }}assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="{{ asset('') }}assets/js/main.js"></script>

</body>

</html>
