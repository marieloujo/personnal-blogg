<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name', 'Blogger') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <!-- Font Awesome Icons -->
        <link href="{{ asset('frontend/css/all.css') }}" rel="stylesheet">


        <!-- --------- Owl-Carousel ------------------->
        <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/owl.theme.default.css') }}" rel="stylesheet">

        <!-- ------------ AOS Library ------------------------- -->
        <link href="{{ asset('frontend/css/aos.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        @stack('css')
        <!-- Custom Style   -->
        <link href="{{ asset('frontend/css/Style.css') }}" rel="stylesheet">

    </head>
    <body>


        <!-- ----------------------------  Navigation ---------------------------------------------- -->

        <nav class="nav">
            @include('layouts.frontend.partial.header')
        </nav>

        <!-- ------------x---------------  Navigation --------------------------x------------------- -->

        <!----------------------------- Main Site Section ------------------------------>

        <main>

            <!------------------------ Site Title ---------------------->

            <section class="site-title">
                @yield('site-title')
            </section>

            <!------------x----------- Site Title ----------x----------->

            <!-- --------------------- Blog Carousel ----------------- -->

            <section>
                <div class="blog">
                    @yield('blog-section')
                </div>
            </section>

            <!-- ----------x---------- Blog Carousel --------x-------- -->

            <!-- ---------------------- Site Content -------------------------->

            <section class="container">
                @yield('site-content')
            </section>

            <!-- -----------x---------- Site Content -------------x------------>

        </main>

        <!---------------x------------- Main Site Section ---------------x-------------->


        <!-- --------------------------- Footer ---------------------------------------- -->

        <footer class="footer">
            @include('layouts.frontend.partial.footer')
        </footer>

        <!-- -------------x------------- Footer --------------------x------------------- -->

        <!-- Scripts -->


        <script src="{{ asset('frontend/js/app.js') }}" defer></script>
        <script src="{{ asset('frontend/js/jquery.js') }}" defer></script>

        <!-- Jquery Library file -->
        <script src="{{ asset('frontend/js/Jquery3.4.1.min.js') }}" defer></script>

        <!-- Bootstrap Core Js -->
        <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.js') }}"></script>

        <!-- --------- Owl-Carousel js ------------------->
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" defer></script>

        <!-- ------------ AOS js Library  ------------------------- -->
        <script src="{{ asset('frontend/js/aos.js') }}" defer></script>

        <!-- Custom Javascript file -->
        <script src="{{ asset('frontend/js/main.js') }}" defer></script>

        <!-- Toastr Plugin Js -->
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

        {!! Toastr::message() !!}

        @stack('js')
    </body>
</html>

