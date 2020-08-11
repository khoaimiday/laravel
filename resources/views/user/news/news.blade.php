<!doctype html>
<html lang="en">
  <head>
    <title>Blog</title>
    <style>
    * {
        box-sizing: border-box;
    }
    .news-body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0px;
        font-size: 12px;
        /* background-image:url('img/news/bg1.jpg'); */
        background-size:cover;
        margin:0 40px;
    }
    .header {
        width: 100%;
        height: 100%;
        padding-right: 8%;
        padding-top: 5%;
        color: #1B4E00;
        text-align: right;
        font-family: 'M PLUS Rounded 1c', sans-serif;
    }
    .image-header{
      width:100%;
      background-image:url('img/news/bg3.png');
      background-size:cover;
      background-repeat: no-repeat;
      z-index:100;
      margin:20px;
      min-height:550px;
    }
    .headerfont {
        font-size: 50px;
    }

    .topheader2 {
        background-image: url('img/nav/1.png');
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
      max-width: 700px;
      text-align:right;

    }
    .new-wrap{
        margin-top:0;
        margin-bottom:0;
        background-color: #ffffe6;
        padding-left:5px;
        padding-right:5px;
        padding-top:0;
    }
    .new-image{
      float:left;
    }
    .new-text{
      display:flow-root;
      padding:10px;
    }
    .new-image a img{
      max-width:300px;
      height:230px;
      padding:5px;
      border:1px solid white;
    }
    p.new-title-a {
      text-decoration:none;
      color:black;
      font-size:25px;
    }
    p.new-title-a:hover{
      text-decoration-style:none;
      text-decoration-line: none
      color:#333;
    }
    .column {
      float: left;
      width: 100%;
      margin-bottom: 16px;
      padding: 0 8px;
    }
    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
    .newscard {
      display:block;
      margin-top:25px;
      border:1px solid white;
      padding:15px;
      background-color:#D7E7A9;
      box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);
      height:300px;
      opacity:0.9;
    }
    a.readMore-button {
        text-decoration:none;
        font-size:15px;
        color:#fff;
        opacity:0.6;
        background-color: #9acd32;
        display:block;
        padding:4px 8px;
        margin:5px;
        max-width:150px;
        margin-left:40px;
        text-align:center;
        border-radius:20px;
        border:1px solid #9acd32;
        box-shadow: 0px 6px 20px 0px rgba(0,0,0,0.2);
        transition: all ease-in-out 0.2s;
        cursor: pointer;
        position:relative;
    }
    a.readMore-button:hover{
        text-decoration:none;
        background-color:#fff;
        opacity:0.3;
        border:1px solid #ddd;
        border-radius: 20px;
        color:#000;
        font-weight: 500px;
        line-height: 25px;
        opacity:1.2;
    }
    .news-pagination{
      margin-left: 40%;
      margin-top: 20px;
      display:flex;
      font-size:20px;
}
    .news-pagination li a{
      padding: 10px 10px;
      display: inline-block;
      color: white;
      background: none;
      border: none;
}
    .text-box{
      left:5%;
      max-height:100%;
      position:relative;
      z-index:200;
      backface-visibility:hidden;
      font-size:100%;
      text-align:left;
      color:#333;
      padding:100px;
    }

      @media (min-width: 650px){
      .text-box{
        width: 47%;
      }
    }
    @media(max-width:500px){
      .large-4{
        display:none;
      }
      .newscard{
        height:400px;
      }
      .large 8{
        width:100%;
        padding:0;
      }
      .new-image{
        float:none;
      }
      .new-text{
        display:flow-root;
        padding:10px;
      }
    }
    .large-8{
      padding-right:50px;
    }
    .large-4{
      border-left:1px solid #ececec;
      padding:5px;
    }
    .post-sidebar{
      padding-top:40px;
      border-left:1px solid #ececec;

    }
    .widget ul{
      border-top:1px solid #ececec;
    }
    .widget ul li{
      list-style-type:none;
      border:1px solid #ececec;
      margin:10px;
      padding:5px;
      display:inline-block;
      float:left;
      background-color:#FFFFAA;

    }
    .recent-news{
      border:1px solid #9acd32;
      font-size:13px;
      padding:10px;
      background-color:#ffffaa;
      box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.5);
      margin-bottom:20px;
    }
    .recent-news a img{
      width:38px;
      height:38px;
      border:1px solid white;
      float:left;
      margin:5px;
    }
     p.new-title-b {
      text-decoration:none;
      color:black;
      font-size:16px;
      display:inherit;
      margin-left:3px;

    }
    .widge ul li a p.new-title-b:hover{
      text-decoration:none;
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
      <div class="headerfont">Chăm sóc sức khoẻ </div>
        <p> cùng <b class="headerfont">Cucumber</b></p>
     </div>
  </div>
  {{ Breadcrumbs::render('news') }}

    <div class="news-body">
      <div class="container">
        <div class="row row-large">
          <div class="large-8 col-8">
            @foreach ($news as $new)
             <div class="newscard" >
              <div class="new-image">
                <a href=""><img src="{{ url('images/news/'.$new->image) }}" alt=""></a>
              </div>
              <div class="new-text">
              <div class="new-title">
                <a href="{{ url('/user/news/newsDetail/'.$new->id) }}"><p class="new-title-a">{{ $new->title }}</p></a>
              </div>
              <div class="new-content">
                <p>{{ $new->created_at }}</p>
                <a href="{{ url('/user/news/newsDetail/'.$new ->id) }}" class="readMore-button">Đọc thêm..</a>
                </div>
              </div>
            </div>
            @endforeach
            {{ $news->links() }}
          <!-- <ul class="news-pagination list-unstyled">
            <li class="page-item"><a class="page-link" href="#">Trước</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">...Sau</a></li>
          </ul> -->
          </div>
          <div class="large-4 col-4">
            <div class="post-sidebar">
                <h4 align="center" style="color:black;font-weight:500"><b>Các tin tức liên quan</b> </h4>
                <div class="widge">
                  <ul style="list-style-type:none;">
                  @foreach ($news as $new)
                    @if($new->topic =="Tin tức")
                    <li class="recent-news">
                    <a href=""><img src="{{ url('images/news/'.$new->image) }}" alt=""></a>
                    <a href="{{ url('/user/news/newsDetail/'.$new->id) }}"><p class="new-title-b">{{ $new->title }}</p></a>
                    </li>
                  @endif
                  @endforeach
                  </ul>
                </div>
            </div>
          </div>
          </div>
        </div>

      </div>
    </div>
    <div class="image-header">
      <div class="text-box x10 md-x5 lg-x5 y85 md-y95 lg-y85">
        <h1 class="text">
          Chia sẻ những kiến thức và thông tin hữu ích giúp chăm sóc và bảo vệ sức khoẻ cho cả gia đình bạn.
        </h1>
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
