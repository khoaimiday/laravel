<!doctype html>
<html lang="en">
  <head>
    <title>Bài chi tiết</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    * {
        box-sizing: border-box;
    }
    .newsdetail-body {
      margin: 0px;
      padding:0px;
      background-image:url('/img/news/bg2.jpg');
      
    }
    .newsdetail-img img{
      width:70%;
      float:center;
      padding:10px;
      align-content:center;
    }
    .newsdetail-card {
      margin:5px 20px;
      height:auto;
      border-radius:20px;
      border:solid 2px white;
      background-color:#c1cd97;
      background-position:center;
      background-attachment:fixed;
      padding:30px;
      color:white;
      box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);
    }
    .newsdetail-card h2{
      font-family: 'M PLUS Rounded 1c', sans-serif;
      text-align:center;
      font-size:50px;
    }
    pre{
      white-space:pre-wrap;
      word-wrap: break-word;
      color:white;  
    }
    </style>
  </head>
  <body>
  @include('fragments.topheader')

  <div class="newsdetail-body">
  <div class="container">
  <div class="newsdetail-card">
        <h2>{{$n->title}}</h2>
          <p style="text-align:right;padding-right:30px">Cập nhật ngày: {{ $n->updated_at }}</p>
        <div>
            <div class="newsdetail-img" style="align-content:center"><img src="{{ url('images/news/'.$n->image) }}" alt=""></div> 
            <pre>{!!$n->content!!}</pre>
        </div>
      </div>
  </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
</div>

@include('fragments.footer2')