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
.column {
  float: left;
  width: 50%;
  padding-left: 30px;
  padding-right: 30px;
  

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: blue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  padding-right: 50px;
  
}
.row{
    padding-top: 20px;
    padding-bottom: 50px;
    padding-left: 30px;
    padding-right: 30px;
}

.column iframe{
    padding-top: 50px;
    padding-bottom: 50px;
    padding-left: 50px;
    padding-right: 50px;
}
.column form
{
    padding-right: 30px;
}
.bg-img {
  /* The image used */
  background-image: url("img/contact/bg.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

label{
  font-size: 20px;
}
.accordion {
  background-color: white;
  color: black;
  cursor: pointer;
  width: 50%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 20px;
  transition: 0.4s;
  padding-left: 100px;
  padding-right: 100px;
  padding-top: 18px;
  padding-bottom: 18px;
  border-top: 1px solid blue;
  border-bottom: 1px solid blue;
}

.active, .accordion:hover {
  background-color:white ;
}

.accordion:after {
  content: '\002B';
  color: black;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
h2{
  color: red;
}
.box{
  padding-top: 50px;
  padding-bottom: 50px;
  padding-left: 20%;
   
}
.main
{
    padding-top: 50px;
    padding-left: 75px;
}
.img img{
    width: 500px;
    height: 247px;
    padding-top: 3px;
    padding-bottom: 3px;
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
    {{-- CAROU-SEL  --}}
    <section class="carousel">
        @include('fragments.carousel')
    </section>
    {{-- CAROU-SEL --}}
    <body>
<div class="main">

        
<h1>Các câu hỏi thường gặp</h1>
<div class="box"> 
    


<button class="accordion">Làm thế nào để đăng ký trên trang web</button>
<div class="panel">
    <div class="panel2">
    <p>Quý khách vui lòng làm theo các bước hướng dẫn sau:</p>
  <p>
      Bước 1:Chọn mục<strong>“Đăng Ký”</strong> ở góc trên bên phải của trang web<p>
      <div class="img"><img src="img/faq/index.jpg"></div>
      <p>Bước 2:Trong trang đăng ký:</p>
      <p>1.Nhập đầy đủ thông tin </p>
      <p>2.Cuối cùng bấm nút dăng ký</p>
      <div class="img"><img src="img/faq/index2.jpg"></div>
      
  
</div>
</div>

<button class="accordion">Làm thế nào để thay đổi thông tin tài khoản</button>
<div class="panel">
  <p></p>
</div>

<button class="accordion">Làm thế nào để thay đổi mật khẩu</button>
<div class="panel">
  <p></p>
</div>
<button class="accordion">Làm thế nào để kiểm tra lịch sử đặt hàng</button>
<div class="panel">
  <p></p>
</div>
<button class="accordion">Làm thế nào để đặt hàng trên trang web</button>
<div class="panel">
  <p></p>
</div>

</div>
</div>

</body>   
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

    function AddCart(id){
        $.ajax({
            url: '/AddCart/'+id,
            type: 'GET',
        }).done(function(response){
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
        });
        alertify.alert("Cucumber","Đã thêm sản phẩm vào giỏ hàng",function(){
                alertify.message(' Đăng nhập để giao hàng ngay!');
        });
    }

    // $("#change-item-cart").on("click".".si-close i",function(){
    //     console.log($(this).data("id"));
    // });
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
{{-- END SCRIPT --}}