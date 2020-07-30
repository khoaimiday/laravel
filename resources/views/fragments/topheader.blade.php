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
                    <span class="badge">3</span>
                </a>
                <div class="cart-hover">
                    <div id="change-item-cart">
                        <div class="select-items">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
                                        <td class="si-text">
                                            <div class="product-selected">
                                                <p>₫60.00 x 1</p>
                                                <h6>Kabino Bedside Table</h6>
                                            </div>
                                        </td>
                                        <td class="si-close">
                                            <i class="ti-close"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
                                        <td class="si-text">
                                            <div class="product-selected">
                                                <p>₫60.00 x 1</p>
                                                <h6>Kabino Bedside Table</h6>
                                            </div>
                                        </td>
                                        <td class="si-close">
                                            <i class="ti-close"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="select-total">
                            <span>total:</span>
                            <h5>₫120.00</h5>
                        </div>
                    </div>
                    <div class="select-button">
                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
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
        opacity: 0.3;
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
        opacity: 0.8;
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
        position: absolute;
        top: 0px;
        right: 0px;
        padding: 5px 10px;
        border-radius: 50%;
        background: red;
        color: white;
    }

    .cart-hover {
        position: absolute;
        right: 10px;
        top: 50px;
        width: 350px;
        background: #ffffff;
        z-index: 999;
        text-align: left;
        padding: 30px;
        opacity: 1s;
        visibility: hidden;
        box-shadow: 0 13px 32px rgba(51, 51, 51, 0.5);
        transition: all 0.3s;
    }

    .tophead-menu ul li.cart:hover .cart-hover {
        opacity: 1.2;
        visibility: visible;
        top: 40px;

    }
    .select-items table {
	width: 100%;
    }
    .select-items table tr td {
	    padding-bottom: 20px;
    }
    .select-items table tr td.si-pic img {
	    border: 1px solid #ebebeb;
    }
    .select-items table tr td.si-pic img {
	    border: 1px solid #ebebeb;
    }
    .select-items table tr td.si-text {
	    padding-left: 18px;
    }
    .product-selected p {
	    color: #e7ab3c;
	    line-height: 30px;
	    margin-bottom: 7px;
    }
    .product-selected h6 {
	    color: #232530;
    }

    .select-items table tr td.si-close {
	    color: #252525;
	    font-size: 16px;
	    cursor: pointer;
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
    .select-button a.view-card {
	    font-size: 12px;
	    letter-spacing: 2px;
	    display: block;
	    text-align: center;
	    background: #191919;
	    color: #ffffff;
	    padding: 15px 30px 12px;
	    margin-bottom: 10px;
    }
    .select-button a.checkout-btn {
	    font-size: 12px;
	    letter-spacing: 2px;
	    display: block;
	    text-align: center;
	    color: #ffffff;
	    padding: 15px 30px 12px;
    }
</style>
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
    <script>
    function AddCart(id){
        $.ajax({
            url: 'AddCart/'+id,
            type: 'GET',
        }).done(function(response){
            console.log(response);
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            alert('Đã thêm vào Giỏ hàng!');
        });
    }

</script>