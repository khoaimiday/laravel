@extends('layouts.default')

@section('content')
<style>
.accordion {
  background-color: white;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 70%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  border-bottom: #444 solid 1px;
  border-top: #444 solid 1px;
  font-size: 20px;
}

.active, .accordion:hover {
  background-color: #F7FE2E;
}

.accordion:after {
  content: '\002B';
  color: #777;
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
}
.img img{
    width: 500px;
    height: 247px;
    padding-top: 3px;
    padding-bottom: 3px;
}
<<<<<<< HEAD
* {
        box-sizing: border-box;
=======

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


>>>>>>> 9c51f071778187d6e8c41bf3f94f8840ab61b7b6
}
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


.column iframe{
    padding-top: 50px;
    padding-bottom: 50px;
    padding-left: 50px;
    padding-right: 50px;
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
<<<<<<< HEAD

</style>

<div class="main">    
<h2>Các câu hỏi thường gặp</h2>
<div class="box"> 
    
=======
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
    {{ Breadcrumbs::render('FAQ') }}


<h1>Các câu hỏi thường gặp</h1>
<div class="box">

>>>>>>> 9c51f071778187d6e8c41bf3f94f8840ab61b7b6


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
      <p>Quý khách vui lòng làm theo các bước hướng dẫn sau:</p>
  <p>
      Bước 1:Chọn mục<strong>“Đăng Ký”</strong> ở góc trên bên phải của trang web<p>
      <div class="img"><img src="img/faq/index.jpg"></div>
      <p>Bước 2:Trong trang đăng ký:</p>
      <p>1.Nhập đầy đủ thông tin </p>
      <p>2.Cuối cùng bấm nút dăng ký</p>
      <div class="img"><img src="img/faq/index2.jpg"></div>
</div>

<button class="accordion">Làm thế nào để thay đổi mật khẩu</button>
<div class="panel">
<p>Quý khách vui lòng làm theo các bước hướng dẫn sau:</p>
  <p>
      Bước 1:Chọn mục<strong>“Đăng Ký”</strong> ở góc trên bên phải của trang web<p>
      <div class="img"><img src="img/faq/index.jpg"></div>
      <p>Bước 2:Trong trang đăng ký:</p>
      <p>1.Nhập đầy đủ thông tin </p>
      <p>2.Cuối cùng bấm nút dăng ký</p>
      <div class="img"><img src="img/faq/index2.jpg"></div>
</div>
<button class="accordion">Làm thế nào để kiểm tra lịch sử đặt hàng</button>
<div class="panel">
<p>Quý khách vui lòng làm theo các bước hướng dẫn sau:</p>
  <p>
      Bước 1:Chọn mục<strong>“Đăng Ký”</strong> ở góc trên bên phải của trang web<p>
      <div class="img"><img src="img/faq/index.jpg"></div>
      <p>Bước 2:Trong trang đăng ký:</p>
      <p>1.Nhập đầy đủ thông tin </p>
      <p>2.Cuối cùng bấm nút dăng ký</p>
      <div class="img"><img src="img/faq/index2.jpg"></div>
</div>
<button class="accordion">Làm thế nào để đặt hàng trên trang web</button>
<div class="panel">
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
</div>
<<<<<<< HEAD
 
=======

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
>>>>>>> 9c51f071778187d6e8c41bf3f94f8840ab61b7b6
<script>
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
<<<<<<< HEAD
</script> 
@endsection
=======
</script>
{{-- END SCRIPT --}}
>>>>>>> 9c51f071778187d6e8c41bf3f94f8840ab61b7b6
