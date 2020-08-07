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

    <!-- FONT AWESOME--->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    {{-- <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}"> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Owl-carousel --}}
    <link rel="stylesheet" href="{{ url('/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('/owlcarousel/owl.theme.default.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style__product.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style__promotion.css') }}">

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
        font-size: 16px;
        /* background-color: #dbefdc */
    }

    /* HEADER #### LOGO TITLE */
    .header {
        width: 100%;
        height: 100%;
        padding-right: 8%;
        padding-top: 5%;
        color: #1B4E00;
        text-align: right;
        font-family: 'M PLUS Rounded 1c', sans-serif;
    }

    .headerfont {
        font-size: 60px;
    }

    .topheader2 {
        /* padding-right: 50px; */
        background-image: url('img/nav/3.png');
        min-height: 400px;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: rgba(0, 0, 0, 0);
        background-origin: padding-box;
    }

    /* Increase the font size of the heading */
    .header p {
        font-size: 25px;
    }

    /* END HEADER #### LOGO TITLE */


    /* CAROUSEL */
    .carousel {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
        /* overflow: hidden; */
    }

    .carousel .owl-dots {
        position: absolute;
        bottom: 20px;
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

    .owl-theme .owl-dots .owl-dot.active span {
        background-color: white;
        opacity: 1;
        border: 3px solid #fff;
    }

    .owl-theme .owl-dots .owl-dot:hover span {
        background-color: transparent;
        border: 3px solid #fff;
        opacity: 1;
    }
    .owl-carousel .owl-item img{
        /* transform: translate(10px, -60px); */
    }

    /* END CAROUSEL */


    /* LINE BREAK */
    .section-title-container {
        margin-top: 3.5em;
    }

    .section-title {
        position: relative;
        -js-display: flex;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 100%;
    }

    .section-title b {
        display: block;
        -ms-flex: 1;
        flex: 1;
        height: 2px;
        opacity: .1;
        background-color: currentColor;
    }

    .section-title-center span {
        margin: 0 15px;
        text-align: center;

    }

    .section-title span {
        text-transform: uppercase;
    }

    .container:after,
    .row:after,
    .clearfix:after,
    .clear:after {
        content: "";
        display: table;
        clear: both;
    }

    /*END LINE BREAK */

  /* CSS ABOUT PAGE */
.about{
    margin: 15px;
    text-align: center;
    font-size: 15px;
    background-color: white;
}
.about .featured-box{
    margin: 0;
    padding: 30px 15px;
}

.about .about__img{
    width: 70px;
    margin: 0 auto;
}
.about .about__img img{
    width: 100%;
}
.about .about__content{
    padding-top: 20px;

}
.about__border-left{
    border-left: 1px solid #ececec;
}
.about .span{
    height: 30px;
}

    /* FOOTER */
    .footer {
        /* text-align: center; */
        overflow: hidden;
        position: relative;
    }

    /* END FOOTER */

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

{{-- BODY --}}

<body>
    {{-- MY WEBSITE --}}

    @include('fragments.topheader')
    {{-- <div class="topheader2"> --}}
    {{-- NAV-BAR-TOP --}}
    @include('fragments.nav-bar-top')
    {{-- NAV-BAR-TOP --}}

    {{-- HEADER --}}
    {{-- <div class="header">

                    <div class="headerfont">Chăm sóc sức khoẻ</div>
                    <p> là <b class="headerfont">Ưu tiên hàng đầu</b> của Cucumber.</p>
                </div> --}}
    {{-- HEADER --}}
    {{-- </div> --}}

    {{-- CAROU-SEL  --}}
    <section class="carousel">
        @include('fragments.carousel')
    </section>
    {{-- CAROU-SEL --}}

    {{-- Promotion --}}
    <section class="promotion container">
        @include('fragments.promotion')
    </section>
    {{-- End Promotion --}}

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
            // margin:10,
            loop:true,
            autoHeight:true,
            autoplay:true,
            autoplayTimeout:5000,
        });
    });

    // function AddCart(id){
        
    //     $.ajax({
    //         url: '/AddCart/'+id,
    //         type: 'GET',
    //     }).done(function(response){
    //         $("#change-item-cart").empty();
    //         $("#change-item-cart").html(response);
    //     });
    //     alertify.alert("Cucumber","Đã thêm sản phẩm vào giỏ hàng",function(){
    //             alertify.message(' Đăng nhập để giao hàng ngay!');
    //     });
    // }
    
    // $("#change-item-cart").on("click".".si-close i",function(){
    //     console.log($(this).data("id"));
    // });
</script>
{{-- END SCRIPT --}}
