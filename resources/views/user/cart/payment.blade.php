<!doctype html>
<html lang="en">

<head>
    <title>Xác nhận</title>
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
        .cart-card {
            margin: 0px 40px;
            height: auto;
            border: solid 2px white;
            background-color: #ffffe6;
            padding: 20px;
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);
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
            font-size: 13px;
            color: #252525;
            border-bottom: 1px solid #ebebeb;
            text-align: center;
            padding: 18px 8px 19px;
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

        .cart-table table tr td.cart-title h6{
            color: #252525;
            padding-right:20px;
            padding-left:20px;
        }

        .cart-table table tr td.p-price {
            width:30px;
        }

        .cart-table table tr td.p-price,
        .cart-table table tr td.total-price {
            color: #e7ab3c;
            font-size: 16px;
            font-weight: 400;
        }

        .cart-table table tr td.total-price {
            width: 12%;
        }
        .cart-table table h4{
            padding:20px;
        }
        .proceed-checkout ul {
            border: 2px solid #ebebeb;
            background: #FFF8DC;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 16px;
            padding-bottom: 20px;
        }

        .proceed-checkout ul li {
            list-style: none;
            font-size: 16px;
            font-weight: 400;
            color: #252525;
            text-transform: uppercase;
            overflow: hidden;
        }
        h4.confirm-user{
            margin:30px;
        }

        .proceed-checkout ul li.discounttotal {
            font-weight: 400px;
            text-transform: capitalize;
            border-bottom: 1px solid #ffffff;
            padding-bottom: 14px;
            padding-top:10px;
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
        .confirm{
            display:inline-flex;
            float:right;
            margin-top:-10px;
        }

        .confirm button{
            font-size: 14px;
            font-weight: 400;
            color: #ffffff;
            background: #9acd32;
            text-transform: uppercase;
            padding: 15px 25px 14px 25px;
            display: block;
            text-align: center;
            text-decoration:none;
            opacity:0.8; 
            cursor: pointer;
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.5);
            transition: all ease-in-out 0.2s;     
            margin-bottom:20px;       
        }
        a.btn-back{
            font-size: 14px;
            font-weight: 700;
            color: #ffffff;
            background: #252525;
            text-transform: uppercase;
            padding: 15px 25px 14px 25px;
            display: block;
            text-align: center;
            text-decoration:none;
            opacity:0.4;
            cursor: pointer;
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.5);
            transition: all ease-in-out 0.2s;
            margin-bottom:20px; 
            margin-right:20px;
        }
        </style>

</head>

<body>
    @include('fragments.topheader')
    <div class="cart-body">
        <div class="cart-card">
            <section class="breadcrumb-item">
                <div class="container bg-white">
                    <nav class="breadcrumb bg-white">
                        <a class="breadcrumb-item" href="{{route('home')}}">Trang chủ </a>
                        <span class="breadcrumb-item"> Giỏ hàng </span>
                        <span class="breadcrumb-item active">Thanh toán </span>
                    </nav>
                </div>
            </section>
            <!-- End Breadcrumb -->

            </section>
            <section class="userOrderDetail">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                         <form method="POST"  action="{{route('checkOrder')}}" method="post" enctype="multipart/form-data">   {{ csrf_field() }}
                            <div class="cart-table">
                                <table>  
                                     <p><b>Phương thức thanh toán: </b>Nhận hàng & thanh toán tiền mặt tại nhà</p>
                                     <h4 class="confirm-user">Thông tin khách hàng</h4>
                                    <tr class="form-group">
                                        <td><label for=""> Tên người nhận</label></td>
                                        <td><input type="text" class="form-control" name="name" value="{{$userOrder->name}}"></td>
                                    </tr>
                                    <tr class="form-group">
                                        <td><label for=""> Số điện thoại</label></td>
                                        <td><input type="text" class="form-control" name="phone" value="{{$userOrder->phone}}"></td>
                                    </tr>
                                    <tr class="form-group">
                                        <td><label for=""> Địa chỉ</label></td>
                                        <td><input type="text" class="form-control" name="address" value="{{$userOrder->address}}"></td>
                                    </tr>
                                    <tr class="form-group">
                                        <td><label for="">Ghi chú </label></td>
                                        <td><input type="textarea" class="form-control" name="note" value="{{$userOrder->note}}"></td>
                                    </tr>
                                 </table>
                            </div>
                            <div class="confirm">
                                <a class="btn-back" href="{{route('ListOrder')}}" ><i class="fa fa-angle-left mr-2" aria-hidden="true"></i> Quay lại giỏ hàng</a>
                                <button type="submit" id="btn-submit-information" class="confirmOrderBtn">Xác nhận đặt hàng</button>
                            </div>
                        </form>
                       </div>
                    </div>
                </div>
            </section>
    
            <section class="shopping-cart">
                <div class="container">
                    <div class="row">
                    @if(Session::has("Cart") !=null)
                        <div class="col-lg-12" >
                            <div class="cart-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="p-name">Sản phẩm</th>
                                            <th>Đơn giá</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                       
                                        @foreach(Session::get("Cart")->products as $item)
                                        <tr>
                                            <td class="cart-pic first-row">
                                                <!-- <img src="{{ url('img/feature/product/'.$item['productInfo']->image)}}"
                                                    alt=""> -->
                                            </td>
                                            <td class="cart-title first-row">
                                                <h6>{{($item['productInfo']->product_name)}}</h6>
                                            </td>
                                            <td class="p-price first-row">
                                                {{number_format($item['productInfo']->price)}}Đ</td>
                                            <td class="qua-col first-row">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <span>{{$item['quantity']}}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="total-price first-row">{{number_format($item['price'])}}Đ</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 offset-lg-8">
                                    <div class="proceed-checkout">
                                        <ul>
                                            <li class="discounttotal">Chiết khấu (Nếu có)
                                                <span></span></li>
                                            <li class="cart-total">Tổng cộng
                                                <span>{{number_format(Session::get('Cart')->totalPrice)}}Đ</span></li>
                                        </ul>
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