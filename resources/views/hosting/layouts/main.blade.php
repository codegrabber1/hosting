<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Font -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:300,400,700,400italic,700italic'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/animate.css">
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/jslider.css">
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/responsive.css">
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/jquery.scrollbar.css">
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/buttons/social-icons.css">
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/owl/owl.carousel.css">
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/prettyPhoto.css">
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/myicons.css">
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/app.css">
{{--        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/style.css">--}}

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/customizer/pages.css">
{{--        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/customizer/elements-pages-customizer.css">--}}
        <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/customizer/home-pages-customizer.css">

        <!-- IE Styles-->
        <link rel='stylesheet' href="{{ asset(env('THEME')) }}/css/ie/ie.css">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <title>{{ config('app.name') }}</title>

    </head>
    <body class="fixed-header home">
    <div class="page-box">
        <div class="page-box-content">
            <!-- Page Loader -->
            <div id="pageloader">
                <div class="loader-item fa fa-spin text-color"></div>
            </div>
            <header class="header header-eight">
            <div class="header-wrapper">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header logo-box">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset(env('THEME')) }}/images/logo.png" class="logo-img" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- .logo-box -->
                        <div class="navbar-right right-box">
                            <div class="right-box-wrapper">
                                <div class="header-icons">
                                    <div class="share-header hidden-600">
                                        <a href="#">
                                            <i class="fa fa-share-alt"></i>
                                        </a>
                                    </div>
                                    <!-- .search-header -->
                                    <div class="search-header hidden-600">
                                        <a href="#">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <!-- .search-header -->
                                    <div class="phone-header hidden-600">
                                        <a href="#">
                                            <i class="fa fa-mobile"></i>
                                        </a>
                                    </div>
                                    <!-- .phone-header -->
                                </div>
                                <!-- .header-icons -->
                                <div class="primary">
                                    <div class="navbar navbar-default" role="navigation">
                                        <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
                                            <span class="text"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <ul class="collapse navbar-collapse nav navbar-nav navbar-center">
                                            <li class="parent megamenu four-columns">
                                                <a href="{{ url('./') }}">Home</a>

                                                <!-- .sub -->
                                            </li>
                                            <li class="parent">
                                                <a href="portfolio-grid-3.html">Support</a>
                                                <ul class="sub">
                                                    <li class="parent">
                                                        <a href="#">Grid</a>
                                                        <a href="portfolio-grid-2.html">Working time</a>
                                                        <a href="portfolio-grid-3.html">FAQ</a>
                                                        <a href="portfolio-grid-4.html">4 Column</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="parent">
                                                <a href="{{ url('blog') }}">Blog</a>

                                            </li>
                                            <li class="parent">
                                                <a href="contact.html">Servers</a>
                                            </li>
                                            <li class="parent">
                                                <a href="contact.html">Partnership</a>
                                            </li>
                                            <li class="parent">
                                                <a href="contact.html">Contact</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- .primary -->
                            </div>
                        </div>
                        <div class="phone-active col-sm-12 col-md-12">
                            <a href="#" class="close"><span>close</span>×</a>
                            <span class="title">Call Us</span> <strong>+0 (123) 456 78 90</strong>
                        </div>
                        <div class="search-active col-sm-12 col-md-12">
                            <a href="#" class="close"><span>close</span>×</a>
                            <form name="search-form" class="search-form">
                                <input class="search-string form-control" type="search" placeholder="Enter Your Text & Search Here" name="search-string">
                                <button class="search-submit">
                                    <i class="fa  fa-search text-color"></i>
                                </button>
                            </form>
                        </div>
                        <div class="share-active col-sm-12 col-md-12">
                            <a href="#" class="close"><span>close</span>×</a>
                            <div class="header-social btn-icon">
                                <a class="mistbtn mistbtn-circle mistbtn-icon-white mistbtn-icon-bg-transparent color-hover icon-facebook" href="#"></a>
                                <a class="mistbtn mistbtn-circle mistbtn-icon-white mistbtn-icon-bg-transparent color-hover icon-twitter" href="#"></a>
                                <a class="mistbtn mistbtn-circle mistbtn-icon-white mistbtn-icon-bg-transparent color-hover icon-google" href="#"></a>
                                <a class="mistbtn mistbtn-circle mistbtn-icon-white mistbtn-icon-bg-transparent color-hover icon-pinterest" href="#"></a>
                                <a class="mistbtn mistbtn-circle mistbtn-icon-white mistbtn-icon-bg-transparent color-hover icon-instagram" href="#"></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        <!-- .header-wrapper -->
        </header>
        <!-- .header -->
            <!-- .header -->
            <div id="main">
                @yield('slider')
                @yield('pricing')
                @yield('latest')
                @yield('content')
                @yield('sidebar')
            </div>
            @yield('footer')
        </div><!-- .page-box-content -->

    </div><!-- .page-box -->
    <!-- .page-box -->
    <div class="clearfix"></div>
    <script src="{{ asset(env('THEME')) }}/js/jquery.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/bootstrap.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/jquery.scrollbar.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/revolution/jquery.zozothemes.plugins.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/revolution/jquery.zozothemes.revolution.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/typed.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/jquery.appear.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/jquery.imagesloaded.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/jquery.prettyPhoto.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/jquery.stellar.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/livicons-1.3.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/raphael.min.js"></script>
    <script src="{{ asset(env('THEME')) }}/js/main.js"></script>
    </body>
</html>