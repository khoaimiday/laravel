    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <script src="js/js/jquery-3.3.1.min.js"></script>
    <script src="js/js/bootstrap.min.js"></script>
    <script src="js/js/jquery-ui.min.js"></script>
    <script src="js/js/jquery.countdown.min.js"></script>
    <script src="js/js/jquery.nice-select.min.js"></script>
    <script src="js/js/jquery.zoom.min.js"></script>
    <script src="js/js/jquery.dd.min.js"></script>
    <script src="js/js/jquery.slicknav.js"></script>
    <script src="js/js/owl.carousel.min.js"></script>
    <script src="js/js/main.js"></script>
<header class="tophead">
    <div class="tophead-menu">
        <ul class="tophead-menu-list">
            <li class="tophead-menu-left"><a href="{{ ('home') }}"><img src="{{url('img/nav/Home.png')}}" alt=""> Trang
                    chủ</a></li>
            <li class="tophead-menu-left"><a href=""><img src="{{url('img/nav/Product.png')}}" alt=""> Sản phẩm</a></li>
            <!-- <div class="tophead-menu-dropdown">
                    <ul class="tophead-menu-dropdown">
                        <li><a href="">Dược phẩm không kê đơn</a></li>
                        <li><a href="">Thực phẩm chức năng</a></li>
                    </ul>
                </div> -->
            <li class="tophead-menu-left"><a href="{{ route('store') }}"><img src="{{url('img/nav/Store.png')}}" alt="">
                    Cửa hàng</a></li>
            <li class="tophead-menu-right cart">
                <a class="" href="">Giỏ hàng
                    <img src="{{url('img/nav/cart.png')}}" alt="">
                    @if(Session::has('Cart')!=null)
                    <span id="total-quantity-badge" class="badge">{{Session::get('Cart')->totalQuantity}}</span>
                    @else
                    <span class="badge" id="total-quantity-badge">0</span>
                    @endif
                </a>
                <div class="cart-hover">
                    <div id="change-item-cart">
                        @if(Session::has("Cart") !=null)
                        <div class="select-items">
                            <table>
                                <tbody>
                                    @foreach(Session::get('Cart')->products as $item)
                                    <tr>
                                        <td class="si-pic"><img src="{{ url('img/feature/product/'.$item['productInfo']->image) }}" alt="">
                                        </td>
                                        <td class="si-text">
                                            <div class="product-selected">
                                                <h6><pre>{{($item['productInfo']->product_name)}}</pre></h6>
                                                <p>{{number_format($item['productInfo']->price)}}Đ x {{$item['quantity']}}</p>
                                            </div>
                                        </td>
                                        <td class="si-close">
                                            <i class="ti-close" data-id="{{$item['productInfo']->id}}">x</i>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="select-total">
                            <span>Tổng cộng: </span>
                            <h5>{{number_format(Session::get('Cart') ->totalPrice)}}Đ</h5>
                        </div>
                        @endif
                    </div>
                    <div class="select-button">
                        <a href="{{route('ListOrder')}}" class="primary-btn view-cart">Xem giỏ hàng</a>
                        <a href="#" class="primary-btn delete-btn">Huỷ</a>
                    </div>
                </div>
            </li>
            <li class="tophead-menu-right"><a href="">Liên hệ <img src="{{url('img/nav/Contact2.png')}}" alt=""></a>
            </li>
            <li class="tophead-menu-right"><a href="">FAQs <img src="{{url('img/nav/FAQ.png')}}" alt=""></a></li>
            <li class="tophead-menu-right"><a href="{{route('news')}}">Blog <img src="{{url('img/nav/Blog2.png')}}"
                        alt=""></a></li>
        </ul>
    </div>
</header>
<style>
    .tophead-menu-left {
        float: left;
        list-style-type: none;
        display: block;
    }

    .tophead-menu-right {
        display: block;
        list-style-type: none;
        float: right;
    }

    .tophead-menu-list li a {
        text-decoration: none;
        color: white;
        display: block;
        padding: 4px 15px;
        margin: 5px;
        text-align: center;
        border-radius: 20px;
        border: 1px solid #9acd32;
        box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);
        transition: all ease-in-out 0.2s;
        cursor: pointer;
    }

    .tophead-menu-list li a:hover {
        background-color: #000;
        opacity: 0.5;
        border: 1px solid #ddd;
        border-radius: 20px;
        color: #ddd;
        font-weight: 500px;
        line-height: 25px;
    }

    .tophead {
        display: block;
        margin-top: 0;
        padding: 2px;
        background: #9acd32;
        opacity: 1;
    }

    .tophead-menu ul {
        display: block;
        background-color: #9acd32;
        font-size: 15px;
        margin: 0;
        overflow: hidden;
    }

    .tophead-menu ul li a img {
        width: 15px;
        height: 15px;
    }

    .badge {
        position: relative;
        bottom:-10px;
        right: 10px;
        padding: 5px 10px;
        margin-right:-20px;
        border-radius: 50%;
        background: red;
        color: white;
        display:inline-block;
    }
    pre{
        white-space:normal;
    }
    .cart-hover {
        position: absolute;
        right: 10px;
        top: 50px;
        width: 400px;
        background: #ffffff;
        z-index: 999;
        text-align: left;
        padding: 30px;
        opacity: 1.5;
        visibility: hidden;
        box-shadow: 0 13px 32px rgba(51, 51, 51, 0.5);
        transition: all 0.2s ease-in-out;
    }

    .tophead-menu ul li.cart:hover .cart-hover {
        opacity: 10;
        visibility: visible;
        z-index:10000;
        top: 40px;
    }
    .cart-hover:hover{
        opacity: 10;
        visibility: visible;
        z-index:10000;
        top: 40px; 
    }
    .select-items table {
	    width:90%;
        border-radius:10px;
    }
    .select-items table tr td {
	    padding-bottom: 10px;
    }
    .select-items table tr td.si-pic img {
	    border: 1px solid #ebebeb;
        width:60px;
        height:60px;
    }
    .select-items table tr td.si-text {
	    padding-left: 15px;
    }
    .product-selected p {
	    color: #e7ab3c;
	    line-height: 20px;
	    margin-bottom: 5px;
    }
    .product-selected h6 {
	    color: #232530;
    }

    .select-items table tr td.si-close {
	    color: #252525;
	    font-size: 18px;
	    cursor: pointer;
        padding: 10px;
        text-decoration: none;
        display:block;
        position:absolute;
        right:0%;
        transform:translate(0%,-50%;)
    }
    .select-items table tr td.si-close:hover {
        opacity:0.6;
    }
    .select-total {
	    overflow: hidden;
	    border-top: 1px solid #e5e5e5;
	    padding-top: 26px;
	    margin-bottom: 30px;
    }
    .select-total span {
	    font-size: 14px;
	    color: #e7ab3c;
	    text-transform: uppercase;
	    letter-spacing: 0.5px;
	    float: left;
    }
    .select-total h5 {
	    color: #e7ab3c;
	    float: right;
    }
    .select-button a.view-cart {
	    font-size: 15px;
	    letter-spacing: 2px;
	    display: block;
	    text-align: center;
	    background: #9acd32;
	    color: #ffffff;
	    padding: 8px 15px ;
	    margin-bottom: 10px;
        box-shadow: 0 13px 32px rgba(51, 51, 51, 0.5);
    }
    .select-button a.delete-btn {
	    font-size: 15px;
	    letter-spacing: 2px;
	    display: block;
	    text-align: center;
        background: #111;
        border:1px solid #000;
        opacity:0.8;
	    color: #ffffff;
	    padding: 8px 15px ;
        box-shadow: 5px 13px 22px rgba(0, 0, 51, 0.5);
    }
    .alertify-notifier.ajs-bottom.ajs-right{
        color: white;
        letter-spacing:2px;
        background: #9acd32;
        opacity: 0.8;
    }
    .alertify-notifier .ajs-message.ajs-success {
        color:white;
        letter-spacing:2px;
        background:#9acd32;
        opacity:0.8;
        border: 1px solid #6B8E23;
        border-radius: 15px 30px;
        padding:10px;
        box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.8);
    }
</style>
    
<script>
   function AddCart(id){
        $.ajax({
            url: '/AddCart/'+id,
            type: 'GET',
        }).done(function(response){
            RenderCart(response);
            alertify.success('Đã thêm vào giỏ hàng!');
        });        
    }

    $("#change-item-cart").on("click",".si-close i",function(){
        $.ajax({
            url: 'DeleteItemCart/'+$(this).data("id"),
            type: 'GET',
        }).done(function(response){
            RenderCart(response);
            alertify.success(' Đã xoá sản phẩm!');
        });
    });
    
    function RenderCart(response){
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
        $("#total-quantity-badge").text($("#total-quantity-cart").val());
    }

</script>