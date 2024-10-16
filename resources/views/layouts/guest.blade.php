<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}-kuchyne, skrine, nábytok</title>
    {{-- META DESCRIPTION --}}
    <meta name="description"
        content="Som stolár, venujúci sa tvorbe kuchyne, skrine alebo nábytku na mieru podľa želania klienta">
    {{-- META KEYWORDS --}}
    <meta name="keywords" content="stolar, kuchyna, nabytok, skrina, na mieru, dielna">
    {{-- META FAVICON --}}
    <link rel="shortcut icon" type="image/ico" href="{{ Storage::url('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ Storage::url('public/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Storage::url('public/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" href="{{ Storage::url('public/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> --}}
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900|Lato:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900|Lato:100,200,300,400,500,600,700,800,900">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English:ital@0;1&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('theme_vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme_vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme_vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme_vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('theme_vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme_vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/ui/trumbowyg.min.css" rel="stylesheet">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my.css') }}">
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased bg-light">
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between" id="head-nav">

            <a href="/" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <h1>Sensa Spa</h1>
                <img src="{{ Storage::url('public/img/logo.png') }}" alt="">
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    @if (Route::current()->getName() == 'admin.projects.index' ||
                            Route::current()->getName() == 'admin.projects.edit' ||
                            request()->segment(count(request()->segments())) == 'admin' ||
                            Route::current()->getName() == 'admin.projects.create' ||
                            Route::current()->getName() == 'admin.projects.index' ||
                            Route::current()->getName() == 'login' ||
                            Route::current()->getName() == 'register')
                        <li><a href="/#hero" class="active">Domov</a></li>
                        <li><a href="/#about">O nás</a></li>
                        <li><a href="/#bookio">Rezervovať</a></li>
                        <li><a href="/#features">Nástroje</a></li>
                        <li><a href="/#constructions">Masáže</a></li>

                        @if (Auth::check() && Auth::user()->is_admin)
                            <li class="dropdown"><a href="#"><span>Admin</span> <i
                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="{{ route('admin.index') }}">Admin Panel</a></li>
                                    <li><a href="{{ route('admin.projects.index') }}">Projekty</a></li>
                                    <li>
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <button type="submit" class="btn"></button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        <li><a href="/#contact">Kontakt</a></li>
                    @else
                        <li><a href="/#hero" class="active">Domov</a></li>
                        <li><a href="/#about">O nás</a></li>
                        <li><a href="/#bookio">Rezervovať</a></li>
                        <li><a href="/#features">Nástroje</a></li>
                        <li><a href="/#constructions">Masáže</a></li>
                        <li><a href="#contact">Kontakt</a></li>
                        @if (Auth::check() && Auth::user()->is_admin)
                            <li class="dropdown"><a href="#"><span>Admin</span> <i
                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="{{ route('admin.index') }}">Admin Panel</a></li>
                                    <li><a href="{{ route('admin.projects.index') }}">Projekty</a></li>
                                    <li>
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Odhlásiť sa') }}
                                            </x-dropdown-link>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    @endif
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="sensafont">Sensa Spa</h1>
                        <p>Vstúpte do sveta relaxu a zdravia, kde sa vaše telo a myseľ stanú jedným.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#bookio" class="btn-get-started">Objednať
                            sa</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url({{ Storage::url('public/img/masaz2.jpg') }})">
                <img src="{{ Storage::url('public/img/masaz2.jpg') }}" alt=""
                    style="display: none !important;" width="0" height="0">
            </div>
            <div class="carousel-item" style="background-image: url({{ Storage::url('public/img/masaz1.jpg') }})">
                <img src="{{ Storage::url('public/img/masaz1.jpg') }}" alt=""
                    style="display: none !important;" width="0" height="0">
            </div>
            <div class="carousel-item" style="background-image: url({{ Storage::url('public/img/introfoto.jpg') }})">
                <img src="{{ Storage::url('public/img/introfoto.jpg') }}" alt=""
                    style="display: none !important;" width="0" height="0">
            </div>
            <div class="carousel-item" style="background-image: url({{ Storage::url('public/img/masaz3.jpg') }})">
                <img src="{{ Storage::url('public/img/masaz3.jpg') }}" alt=""
                    style="display: none !important;" width="0" height="0">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    @if ($errors->any())
        <div class="alert alert-danger col-8 m-auto mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success col-10 m-auto" id="status" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @if (session()->has('info'))
        <div id="flash-message" class="alert alert-{{ session('type') }} col-8 m-auto mt-3">
            <p>
                {{ session('info') }}
            </p>
        </div>
    @endif

    <main id="main">
        {{ $slot }}
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer"
        style="background: url('{{ Storage::url('public/img/footer.jpg') }}') top center no-repeat; background-size: cover;">

        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center col-lg-4 col-md-6">
                        <div class="footer-info" id="contact">
                            <h3>Sensa Spa</h3>
                            <p>
                                Záhorácka 15a <br>
                                90101, Malacky<br><br>
                                <strong>Phone: </strong> <a
                                    href="mailto:kontakt@sensaspa.sk">kontakt@sensaspa.sk</a><br>
                                <strong>Email: </strong> <a href="tel:+421910152552">tel. číslo 0910 152 552</a><br>
                            </p>
                            <div class="social-links d-flex mt-3 d-flex justify-content-center">
                                <a href="https://www.facebook.com/profile.php?id=61566038970741"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/sensa_spa_/"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div><!-- End footer info column-->

                    <div class="col-lg-8 col-md-5 footer-links d-flex justify-content-around">
                        <div>
                            <h4>Menu</h4>
                            <ul>
                                @if (Route::current()->getName() == 'admin.projects.index' ||
                                        Route::current()->getName() == 'admin.projects.edit' ||
                                        request()->segment(count(request()->segments())) == 'admin' ||
                                        Route::current()->getName() == 'admin.projects.create' ||
                                        Route::current()->getName() == 'admin.projects.index' ||
                                        Route::current()->getName() == 'login' ||
                                        Route::current()->getName() == 'register')
                                    <li><a href="/#hero" class="active">Domov</a></li>
                                    <li><a href="/#about">O nás</a></li>
                                    <li><a href="/#bookio">Rezervovať</a></li>
                                    <li><a href="/#features">Nástroje</a></li>
                                    <li><a href="/#constructions">Masáže</a></li>
                                    <li><a href="/#contact">Kontakt</a></li>
                                @else
                                    <li><a href="/#hero" class="active">Domov</a></li>
                                    <li><a href="/#about">O nás</a></li>
                                    <li><a href="/#bookio">Rezervovať</a></li>
                                    <li><a href="/#features">Nástroje</a></li>
                                    <li><a href="/#constructions">Masáže</a></li>
                                    <li><a href="#contact">Kontakt</a></li>
                                    <li><a href="{{ route('ochrana-osobnych-udajov') }}">Ochrana osobných údajov</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div><!-- End footer links column-->



                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>GalaBala</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://github.com/GalaBalaMR?tab=repositories">GalaBala</a>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- For laravel cookie --}}
    @include('cookieConsent::index')

    <div id="preloader"></div>
    <img src="{{ Storage::url('public/loader.gif') }}" alt="loader" id="loader" class="d-none"
        style="width: 4rem;position: fixed; z-index: 10; left: 46%; top: 35%">
    <!-- Vendor JS Files -->
    <script src="{{ asset('theme_vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme_vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('theme_vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('theme_vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('theme_vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('theme_vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Template Main JS File -->

    <script src="{{ asset('js/main.js') }}" defer></script>

    {{-- My JS File --}}
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/trumbowyg.min.js" defer></script>

    <script src="{{ asset('js/script.js') }}" defer></script>
</body>

</html>
