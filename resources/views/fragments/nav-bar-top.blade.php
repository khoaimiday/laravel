
<div class="top-nav">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-8">
                <div class="row" style="justify-content: flex-end;">
                    <div class="search-area" id="search-area">
                    <form role="search" method="post" class="search-form clearfix" action="{{ url('/search/input') }}">
                            <input type="hidden" name="post_type" value="product">
                            <input type="search" class="field-search" placeholder="Tìm kiếm..." value="" name="s" title="Tìm kiếm">
                            <button class="button-search">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="row px-3" style="justify-content: flex-end; list-style: none;">
                    <!-- Authentication Links -->
                    @guest
                    <div class="customer-area">
                        <i class="fa fa-user"></i>
                        <div class="customer-content">
                            <a href="{{ route('register') }}">Đăng ký</a> / <a href="{{ route('login') }}">Đăng nhập</a>
                        </div>
                    </div>
                    @else
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
                    <div class="woocommerce-cart-mini">
                        <a href="https://mypharma.vn/gio-hang/">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="cart-content">Giỏ hàng (0)</span>
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>



<style>
.top-nav{
    /* background-color: #9acd32; */
}
.customer-area {
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    color: #9acd32;
}
.customer-area i {
    font-size: 26px;
    margin: 0 8px 0 0;
}
.customer-area a{
    text-decoration: none;
}
.search-area {
    width: 100%;
    max-width: 550px;
    position: relative;
}
.field-search {
    float: left;
    border: 1px solid #9acd32;
    height: 40px;
    line-height: 19px;
    padding: 11px 10px 10px;
    /* -webkit-border-radius: 10px 0 0 10px;
    -moz-border-radius: 10px 0 0 10px;
    border-radius: 10px 0 0 10px; */
    width: calc(100% - 40px);
}
.button-search {
    height: 40px;
    width: 40px;
    background: #9acd32 none;
    float: left;
    color: #fff;
    border: 0;
    -webkit-border-radius: 0 10px 10px 0;
    -moz-border-radius: 0 10px 10px 0;
    border-radius: 0 10px 10px 0;
    font-size: 19px;
    position: relative;
}
.button-search i {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}
.icofont-search-2:before {
    content: "\ed12";
}
.woocommerce-cart-mini {
    margin: 0 0 0 30px;
}
.woocommerce-cart-mini a {
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    color: #9acd32;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 15px;
}
.woocommerce-cart-mini i {
    margin: 0 8px 0 0;
    font-size: 28px;
}
.icofont-cart-alt:before {
    content: "\eed1";
}
</style>
