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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @yield('style')
</head>

<body>

    {{-- MY WEBSITE --}}

    {{-- NAV-BAR --}}
    @include('layouts.nav-bar')
    {{-- NAV-BAR --}}


    {{-- HEADER --}}
    <div class="header">
        <h1>My Website</h1>
        <p>A <b>responsive</b> website created by me.</p>
    </div>
    {{-- HEADER --}}

    {{-- MAIN CONTENT --}}
    <div class="main">
        @yield('content')
    </div>
    {{-- MAIN CONTENT --}}

    {{-- USE-MORE --}}
    @include('layouts.use-more')
    {{-- END USE-MORE --}}

    {{-- ABOUT PAGE --}}
    @include('layouts.about')
    {{-- END ABOUT PAGE --}}

    {{-- FOOTER --}}
    <div class="footer">
        @include('layouts.footer')
    </div>
    {{-- FOOTER --}}

    {{-- END MY WEBSITE --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>


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
      font-size: 40px;
    }

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

    </style>


<script>
    function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
    }
    </script>
