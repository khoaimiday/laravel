
<div class="top-nav">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-8">
                <div class="row" style="justify-content: flex-end;">
                    <div class="search-area" id="search-area">
                        <input type="search" class="field-search" placeholder="Tìm kiếm..." id="search_input" title="Tìm kiếm" style="position: relative"
                                onkeyup="searchAjax(this.value);"
                                onpaste="searchAjax(this.value);"
                                oncut="searchAjax(this.value);"
                                oninput="searchAjax(this.value);"
                                onfocusout="clearSearch();"
                        >
                        <button class="button-search" type="submit" onclick="event.preventDefault();searchAjax();">
                            <i class="fa fa-search"></i>
                        </button>
                        <div id="searchList"></div>
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
                            <a class="dropdown-item" href="{{url('/users/detailCustomer/'. Auth::user()->id)}}">Infomation
                               
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                    <!-- <div class="woocommerce-cart-mini">
                        <a href="https://mypharma.vn/gio-hang/">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="cart-content">Giỏ hàng (0)</span>
                        </a>
                    </div> -->
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function searchAjax(){
        var query = $("#search_input").val();
        if(query.length >0){
        $.get('search/searchajax/' + query, function(data) {
                $('#searchList').fadeIn();
                $('#searchList').html(data);
                $('#searchList').css({
                    "position":"absolute",
                    "z-index": "100",
                    "top" : "40px",
                    "width": "100%",
                    "background-color": "white",
                    "border": "1px solid #e9e9e9",
                    "overflow": "scroll",
                    "max-height": "300px",
                    // "padding" : "0 10px"
                })
            });
        }else{
            $('#searchList').hide();
        }
    }
    function clearSearch(){
        $('#searchList').hide();
    }
</script>

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
