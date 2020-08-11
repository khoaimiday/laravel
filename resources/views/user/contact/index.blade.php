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

   <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
    {{ Breadcrumbs::render('contact') }}
<div class="row">
 <div class="column">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2725035832495!2d106.6563019820322!3d10.790428741312278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ecb5f1f5265%3A0x7ca605ca712192e!2zMTAxMCBDw6FjaCBN4bqhbmcgVGjDoW5nIFTDoW0sIFBoxrDhu51uZyA1LCBUw6JuIELDrG5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1596107714615!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 </div>
 <div class="column">
 <h2><strong>Phản Hồi</strong></h2>
       <div class="bg-img">
           <form action="{{url('/feedback/postFeedback')}}" method="post" class="container">
           {{ csrf_field() }}
                <label for="fstatus">Tiêu Đề</label>
                   <input type="text" id="fname" name="feedbackTitle" placeholder="Your Tille.." width="50%">
                <label for="fname">Tên Của Bạn</label>
                   <input type="text" id="fname" name="feedbackName" placeholder="Your name.." width="50%">
                <label for="lname">Email</label>
                   <input type="text" id="lname" name="feedbackEmail" placeholder="Your last name.." width="50%">
               <label for="subject">Nội Dung</>
                   <textarea id="subject" name="feedbackContent" placeholder="Write something.." style="height:200px" cols="30"></textarea>
               <input type="submit" value="Gửi">
           </form>
       </div>
 </div>

</div>
</body>
</html>







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
</script>
{{-- END SCRIPT --}}
