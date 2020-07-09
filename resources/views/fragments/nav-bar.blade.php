<div class="marquee">
    <marquee>Đây là một ví dụ về html marquee </marquee>
</div>
<nav class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('favicon_io2/android-chrome-512x512.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                {{-- search bar --}}
                @include('fragments.search')

                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="navigation leftNav">
   <div class="destopNav">
    <div id="visibleNav">
       <a href="" class="logoNav" id="logo">
            <img src="{{ url('img/nav/logo-company.png') }}" alt="">
       </a>
       <ul>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconMedicine.png') }}" alt=""></div>
                <span class="Text">Dược phẩm</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconFunctionalFood.png') }}" alt=""></div>
                <span class="Text">Thực phẩm chức năng</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconStore2.png') }}" alt=""></div>
                <span class="Text">Cửa hàng</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconBlog2.png') }}" alt=""></div>
                <span class="Text">Blog sức khoẻ</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconAboutUs.png') }}" alt=""></div>
                <span class="Text">Về chúng tôi</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconAdvisory.png') }}" alt=""></div>
                <span class="Text">Tư vấn</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconMember2.png') }}" alt=""></div>
                <span class="Text">Thành viên</span>
            </a>
        </li>
       </ul>
    </div>
  </div>
</div>

<style>
    .navbar .navbar-brand img {
        position: absolute;
        width: 300px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .navbar{
        position: relative;
        background-color: #b7dfb8;
    }
    .navbar .nav-item a{
        font-size: 1.2rem;
    }
    .marquee{
        position: absolute;
        top: 0;
        width: 65%;
        z-index: 100;
        font-size: 17px;
        color:lightcoral;
        line-height: 45px;
    }
    div{
        display:block;
    }
    .leftNav .destopNav #visibleNav ul{
        display:block;
        list-style:none;
        padding-inline-start:0;
    }
    .leftNav .destopNav #visibleNav ul li a{
        display:flex;
        flex-direction:column;
        align-items:center;
        height:98px;
        line-height:16px;
        text-align:center;
        cursor:pointer;
        border-bottom: 1px solid rgba(223,228,232,0.5);
        width:100%;
        text-decoration:none;
        font-family:Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;
        font-size:11px;
        box-sizing:border-box;
        background-color:transparent;
    }
    .leftNav .destopNav #visibleNav a img{
         height:100px;
         width:100px;
         margin: 0 ;
    }
    .leftNav .destopNav #visibleNav ul li a img{
        margin-top:20px;
        width:29px;
        height:29px;
    }
    .leftNav .destopNav #visibleNav ul li a .Text{
        margin:4px 10px 0 10px;
        color:#001e50;
    }
    .navigation {
        position:relative;
        z-index:1015;
    }
    .navigation .destopNav{
        display:none;
    }
    .destopNav{
        background:#fff;
        height:100%;
        position:fixed;
        top:0;
        z-index:8000;
        border-right:1px solid rgba(223,228,232,0.5);
    }
    .destopNav #visibleNav{
        width:95px;
        height:100%;
        float:left;
        position:relative;
        overflow:hidden;
    }
    @media(min-width:768px) {
        .navigation .destopNav {
             display:block;
        }
    }


</style>
