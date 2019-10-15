<!doctype html>
<html>
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
<body class="fixed-header">
<div class="page-box">
    <div class="page-box-content">
        <!-- Page Loader -->
        <div id="pageloader">
            <div class="loader-item fa fa-spin text-color"></div>
        </div>
        <header class="header header-eight">
            <div class="header-wrapper">
                @yield('topmenu')
            </div>

            <!-- .header-wrapper -->
        </header>
        <!-- .header -->
        <header class="page-header">
            <div class="container">
                <h1 class="title">Blog Grid 2 Column - Right Sidebar!!!</h1>
            </div>
            <div class="breadcrumb-box">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="./">Home</a></li>
                        <li>Blog</li>
                        <li class="active">Blog Grid 2 Column - Right Sidebar</li>
                    </ul>
                </div>
            </div><!-- .breadcrumb-box -->
        </header>
        <!-- .header -->
        <section id="main">
            <div class="container">
                <div class="row">
                    @yield('content')
                    @yield('sidebar')
                </div>
            </div>
        </section>
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
