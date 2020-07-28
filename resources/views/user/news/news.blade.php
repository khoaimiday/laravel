<!doctype html>
<html lang="en">
  <head>
    <title>Blog</title>
    <style>
    * {
        box-sizing: border-box;
    }
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0px;
        font-size: 12px;
        background-color:#dbefdc;
    }
    .header {
        width: 100%;
        height: 100%;
        padding-right: 8%;
        padding-top: 5%;
        color: #1B4E00;
        text-align: center;
        font-family: 'M PLUS Rounded 1c', sans-serif;
    }
    .headerfont {
        font-size: 50px;
    }

    .topheader2 {
        background-image: url('img/nav/3.png');
        min-height: 400px;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: rgba(0, 0, 0, 0);
        background-origin: padding-box;
    }
    .header p {
        font-size: 25px;
    }
    .new-content p{
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 900px;
    }
    .new-wrap{
        margin-top:0;
        margin-bottom:0;
        background-color: #dbefdc;
        padding-left:5px;
        padding-right:5px;
        padding-top:0;
    }
    .new-image a img{
      max-width:450px;
    }
    .column {
      float: left;
      width: 55%;
      margin-bottom: 16px;
      padding: 0 8px;
    }
    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
    .card {
      height:500px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }    
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  @include('fragments.topheader')
  
  <div class="topheader2">
    @include('fragments.nav-bar-top')
    <div class="header">
      <div class="headerfont">Cucumber </div>
        <p> giới thiệu <b class="headerfont">Blog chăm sóc sức khoẻ</b></p>
     </div>
  </div>
  <div class="container">
    <div class="new-wrap">
        @foreach ($news as $new)
        <div class="row">
          <div class="column" >
            <div class="card">
            <div class="new-image">
              <a href=""><img src="{{ url('images/news/'.$new->image) }}" alt=""></a>
            </div>
            <div class="new-title">
              <a href=""><h3 class="new-title-a">{{ $new->title }}</h3></a>
            </div>
            <div class="new-content">
              <p>{{ $new->content }}</p>
            </div>
            </div>
          </div> 
        </div>
        @endforeach
    </div>
  </div>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


@include('fragments.footer2')