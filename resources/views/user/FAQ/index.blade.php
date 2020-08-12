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
* {
        box-sizing: border-box;
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

</style>

<div class="main">    
<h2>Các câu hỏi thường gặp</h2>
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
</script> 
@endsection