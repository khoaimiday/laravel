<div class="navigation topNav">
  <nav class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
          
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
                    <a href="" class="iconSearch"><div class="search"><img src="{{ url('img/nav/search.png') }}" alt=""></div></a>     
                    <a href="" class="iconShoppingCart"><div class="shoppingCart"><img src="{{ url('img/nav/shoppingCart.png') }}" alt=""></div></a>   
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       Xin chào, {{ Auth::user()->name }} ! <span class="caret"></span>
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
  </div>  
</nav>
<style>
  .navbar .navbar-brand img {
        position: absolute;
        width: 100px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .navbar{
        position: relative;
        background:transparent;
        z-index:100;
        height:30px;
        padding: 3px 6px;

    }
    .navbar .nav-item a{
        font-size: 12px;
    }
    .topNav{
        border-bottom:1px solid #fff;
        transition: top 0.3s;
    }
    .search img {
        width:18px;
        margin-bottom:-8px;
    }
    .shoppingCart img {
        width:18px;
        margin-bottom:-8px;
    }
</style>