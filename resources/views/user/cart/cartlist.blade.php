<!doctype html>
<html lang="en">

<head>
    <title>Giỏ hàng</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }

        .cart-body {
            margin: 0px;
            padding: 40px;
            background-image: url('/img/cart/bg1.jpg');
            background-size: cover;

        }

        .cart-card {
            margin: 0px 40px;
            height: auto;
            border: solid 2px white;
            background-color: #ffffe6;
            padding: 20px;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);
        }

        a.btn-cart {
            text-decoration: none;
            font-size: 15px;
            color: #fff;
            opacity: 0.6;
            background-color: #9acd32;
            display: inline-block;
            padding: 4px 8px;
            margin: 5px;
            width: auto;
            float: right;
            text-align: center;
            border-radius: 20px;
            border: 1px solid #9acd32;
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);
            transition: all ease-in-out 0.2s;
            cursor: pointer;
        }

        a.btn-cart:hover {
            text-decoration: none;
            background-color: #fff;
            opacity: 0.3;
            border: 1px solid #ddd;
            border-radius: 20px;
            color: #000;
            font-weight: 500px;
            line-height: 25px;
            opacity: 1.2;
        }

        .cart-table {
            margin-bottom: 40px;
        }

        .cart-table table {
            width: 100%;
            min-width: 480px;
            border: 1px solid #ebebeb;
        }

        .cart-table table tr th {
            font-size: 16px;
            color: #252525;
            font-weight: 700;
            border-bottom: 1px solid #ebebeb;
            text-align: center;
            padding: 18px 0 19px;
            text-transform: uppercase;
        }

        .cart-table table tr th.p-name {
            text-align: left;
        }

        .cart-table table tr td {
            text-align: center;
            padding-bottom: 34px;
        }

        .cart-table table tr td.first-row {
            padding-top: 30px;
        }

        .cart-table table tr td.cart-pic img {
            width: 80px;
            height:80px;
            border: 2px solid #ebebeb;
            margin-right:20px;
        }

        .cart-table table tr td.cart-title {
            text-align: left;
        }

        .cart-table table tr td.cart-title h5 {
            color: #252525;
        }

        .cart-table table tr td.p-price {
            width:30px;
        }

        .cart-table table tr td.p-price,
        .cart-table table tr td.total-price {
            color: #e7ab3c;
            font-size: 16px;
            font-weight: 700;
        }

        .cart-table table tr td.qua-col {
            width: 16%;
        }

        .cart-table table tr td.qua-col .quantity {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .cart-table table tr td.qua-col .pro-qty {
            width: 123px;
            height: 46px;
            border: 2px solid #ebebeb;
            padding: 0 15px;
            float: left;
        }

        .cart-table table tr td.qua-col .pro-qty .qtybtn {
            font-size: 24px;
            color: #b2b2b2;
            float: left;
            line-height: 38px;
            cursor: pointer;
            width: 18px;
        }

        .cart-table table tr td.qua-col .pro-qty .qtybtn.dec {
            font-size: 30px;
        }

        .cart-table table tr td.qua-col .pro-qty input {
            text-align: center;
            width: 52px;
            font-size: 14px;
            font-weight: 700;
            border: none;
            color: #4c4c4c;
            line-height: 40px;
            float: left;
        }

        .cart-table table tr td.total-price {
            width: 12%;
        }

        .cart-table table tr td.close-td {
            font-size: 16px;
            color: #252525;
            width: 8%;
        }

        .cart-table table tr td.close-td i {
            cursor: pointer;
        }

        .cart-buttons {
            margin-bottom: 34px;
        }

        .cart-buttons .continue-shop {
            color: #b2b2b2;
            border: 2px solid #ebebeb;
            background: #ffffff;
            margin-right: 8px;
            padding: 12px 20px 12px 20px;
            margin-bottom: 10px;
        }

        .cart-buttons .up-cart {
            color: #252525;
            background: #f3f3f3;
            border: 2px solid #ebebeb;
            padding: 12px 20px 12px 20px;
        }

        .discount-coupon {
            margin-bottom: 30px;
        }

        .discount-coupon h6 {
            color: #232530;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .discount-coupon .coupon-form {
            position: relative;
        }

        .discount-coupon .coupon-form input {
            width: 100%;
            height: 46px;
            border: 2px solid #ebebeb;
            color: #b2b2b2;
            font-size: 14px;
            padding-left: 20px;
        }

        .discount-coupon .coupon-form .coupon-btn {
            position: absolute;
            right: 0;
            top: 0;
            color: #252525;
            background: transparent;
            border: 1px solid transparent;
            padding: 13px 25px 10px 35px;
        }

        .proceed-checkout ul {
            border: 2px solid #ebebeb;
            background: #f3f3f3;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 16px;
            padding-bottom: 20px;
        }

        .proceed-checkout ul li {
            list-style: none;
            font-size: 16px;
            font-weight: 700;
            color: #252525;
            text-transform: uppercase;
            overflow: hidden;
        }

        .proceed-checkout ul li.subtotal {
            font-weight: 400px;
            text-transform: capitalize;
            border-bottom: 1px solid #ffffff;
            padding-bottom: 14px;
        }
        .proceed-checkout ul li.discounttotal {
            font-weight: 400px;
            text-transform: capitalize;
            border-bottom: 1px solid #ffffff;
            padding-bottom: 14px;
            padding-top:10px;
        }

        .proceed-checkout ul li.subtotal span {
            font-weight: 700px;
        }

        .proceed-checkout ul li.cart-total {
            padding-top: 10px;
        }

        .proceed-checkout ul li.cart-total span {
            color: #e7ab3c;
        }

        .proceed-checkout ul li span {
            float: right;
        }

        .proceed-checkout .proceed-btn {
            font-size: 14px;
            font-weight: 700;
            color: #ffffff;
            background: #252525;
            text-transform: uppercase;
            padding: 15px 25px 14px 25px;
            display: block;
            text-align: center;
        }
    </style>

</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    @include('fragments.topheader')

    <div class="cart-body">
        <div class="cart-card">
            <section class="breadcrumb-item">
                <div class="container bg-white">
                    <nav class="breadcrumb bg-white">
                        <span class="breadcrumb-item active">Giỏ hàng / </span>
                        <a class="breadcrumb-itembtn-cart" href="{{route('home')}}"> Quay lại Trang chủ</a>
                    </nav>
                </div>
            </section>
            <!-- End Breadcrumb -->

            </section>
            <!-- Cart -->
            <section class="shopping-cart spad">
                <div class="container">
                    <div class="row">
                    @if(Session::has("Cart") !=null)
                        <div class="col-lg-12" id="cartlist-detail">
                            <div class="cart-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="p-name">Sản phẩm</th>
                                            <th>Đơn giá</th>
                                            <th>Số lượng</th>
                                            <th>Tạm tính</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                       
                                        @foreach(Session::get("Cart")->products as $item)
                                        <tr>
                                            <td class="cart-pic first-row"><img
                                                    src="{{ url('img/feature/product/'.$item['productInfo']->image)}}"
                                                    alt=""></td>
                                            <td class="cart-title first-row">
                                                <h5>{{($item['productInfo']->product_name)}}</h5>
                                            </td>
                                            <td class="p-price first-row">
                                                {{number_format($item['productInfo']->price)}}Đ</td>
                                            <td class="qua-col first-row">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <span class="dec qtybtn" onclick="minusItem({{$item['productInfo']->id}})">-</span>
                                                        <input type="text" value="{{$item['quantity']}}">
                                                        <span class="inc qtybtn" onclick="plusItem({{$item['productInfo']->id}})">+</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="total-price first-row" id="tempTotal-{{$item['productInfo']->id}}">{{number_format($item['price'])}}Đ</td>
                                            <td class="close-td first-row"><i class="ti-close" onclick="DeleteListItemCart({{$item['productInfo']->id}});">x</i></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 offset-lg-8">
                                    <div class="proceed-checkout">
                                        <ul>
                                            <li class="subtotal">Tạm tính
                                                <span>{{number_format(Session::get('Cart')->totalPrice)}}Đ</span></li>
                                            <li class="discounttotal">Chiết khấu (Nếu có)
                                                <span></span></li>
                                            <li class="cart-total">Tổng cộng
                                                <span>{{number_format(Session::get('Cart')->totalPrice)}}Đ</span></li>
                                        </ul>
                                        <a href="#" class="proceed-btn">Thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </section>
        </div>
    </div>
    @include('fragments.footer3')
</body>
<script>
    (function ($) {
        $(window).on('load', function () {
            $(".loader").fadeOut();
            $("#preloder").delay(200).fadeOut("slow");
        }); 
    })(jQuery);
    
    function DeleteListItemCart(id){
        $.ajax({
            url: '/DeleteListItemCart/'+id,
            type: 'GET',
        }).done(function(response){
            RenderListCart(response);
            alertify.success('Đã xoá sản phẩm!');
        });        
    }
    function minusItem(id){
        $.ajax({
            url: '/minusItem/'+id,
            type: 'GET',
        }).done(function(response){
            RenderListCart(response);
        });        
    }
    function plusItem(id){
        $.ajax({
            url: '/plusItem/'+id,
            type: 'GET',
        }).done(function(response){
            RenderListCart(response);
        });    
    }    
    function RenderListCart(response){
        $("#cartlist-detail").empty();
        $("#cartlist-detail").html(response);
    }
    
</script>

</html>