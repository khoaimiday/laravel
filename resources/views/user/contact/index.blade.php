@extends('layouts.default')

@section('content')
<style>
* {
      box-sizing: border-box;
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
  padding-top: 5px;
}
label{
  font-size: 20px;
}
</style>



<<<<<<< HEAD

=======
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
>>>>>>> 9c51f071778187d6e8c41bf3f94f8840ab61b7b6
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
                   @error('feedbackTitle')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <label for="fname">Tên Của Bạn</label>
                   <input type="text" id="fname" name="feedbackName" placeholder="Your name.." width="50%">
                   @error('feedbackName')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <label for="lname">Email</label>
                   <input type="text" id="lname" name="feedbackEmail" placeholder="Your last name.." width="50%">
                   @error('feedbackEmail')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
               <label for="subject">Nội Dung</>
                   <textarea id="subject" name="feedbackContent" placeholder="Write something.." style="height:200px" cols="30"></textarea>
                   @error('feedbackContent')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
               <input type="submit" value="Gửi">
           </form>
       </div>
 </div>

</div>
</body>
</html>
<<<<<<< HEAD
@endsection
    
=======







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
>>>>>>> 9c51f071778187d6e8c41bf3f94f8840ab61b7b6
