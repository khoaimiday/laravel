<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Owl-carousel --}}
    <link rel="stylesheet" href="{{ url('/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('/owlcarousel/owl.theme.default.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @yield('style')
</head>

{{-- CSS --}}
<style>
    * {
        box-sizing: border-box;
    }

    /* Style the body */
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        font-size: 12px;
        background-color: #dbefdc
    }

    /* Header/logo Title */
    .header {
        padding: 80px;
        text-align: center;
        background: #1abc9c;
        color: white;
    }

    /* Increase the font size of the heading */
    .header h1 {
        font-size: 30px;
    }

    .carousel{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    }
    .carousel .owl-dots{
        position: absolute;
        bottom: 10px;
        left: 0px;
        right: 0px;
    }
    .owl-theme .owl-dots .owl-dot span {
        border: 3px solid #fff;
        height: 15px;
        width: 15px;
        background-color: transparent;
        opacity: .4;
        transition: opacity .3s;
    }
    .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span{
        background-color: white;
        opacity: 1;
        border: 3px solid #fff;
    }

    is-selected
    /* footer */
    .footer {
        /* text-align: center; */
    }

    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 700px) {
        .row {
            flex-direction: column;
        }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
        .navbar a {
            float: none;
            width: 100%;
        }
    }
    body #mainWrapper{
        padding-top:0;
        min-height:100%;
        overflow:hidden;
        position:relative;
    }
    @media (min-width:768px){
        body #mainWrapper{
            margin-left:95px;
        }
        footer{
            margin-left:95px;
        }
    }
    #superTint{
        background:transparent;
        display:block;
        height:100%;
        left:0;
        transition:all 300ms;
        opacity:0.75;
        position:fixed;
        top:0;
        visibility:hidden;
        width:100%;
        z-index:110;
    }
    .grid{
        position:relative;
        width:100%;
        float:left;
        display:inline-block;
        min-height:100%;
        height:100%;
    }

</style>

{{-- BODY --}}
<body>

    {{-- MY WEBSITE --}}

    {{-- NAV-BAR --}}
    @include('fragments.nav-bar')
    {{-- NAV-BAR --}}
<div id="mainWrapper">
    <div id="superTint"></div>
    <div class="grid">

    {{-- HEADER --}}
    <div class="header">
        <h1>My Website</h1>
        <p>A <b>responsive</b> website created by me.</p>
    </div>
    {{-- HEADER --}}

    {{-- CAROU-SEL  --}}
        <section class="carousel my-2 mx-2">
            @include('fragments.carousel')
        </section>
    {{-- CAROU-SEL --}}


    {{-- MAIN CONTENT --}}
    <div class="main">
        @yield('content')
    </div>
    {{-- MAIN CONTENT --}}

    {{-- USE-MORE --}}
    @include('fragments.use-more')
    {{-- END USE-MORE --}}

    {{-- ABOUT PAGE --}}
    @include('fragments.about')
    {{-- END ABOUT PAGE --}}
    </div>
    </div>
    {{-- FOOTER --}}
    <div class="footer">
        @include('fragments.footer')
    </div>
    {{-- FOOTER --}}

    {{-- END MY WEBSITE --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script src="{{ url('owlcarousel/owl.carousel.min.js') }}"></script>
</body>
{{-- END BODY --}}
</html>


{{-- SCRIPT --}}
<script>
    function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
    }

    // OWL-CAROUSEL
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            items:1,
            margin:10,
            loop:true,
            autoHeight:true,
            autoplay:true,
            autoplayTimeout:5000,
        });
    });

</script>
