<!doctype html>
<html lang="en">
  <head>
    <title>Giỏ hàng</title>
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
    .cart-body {
      margin: 0px;
      padding:40px;
      background-image:url('/img/cart/bg1.jpg');
      background-size:cover;
      
    }
    .cart-img img{
      width:70%;
      float:center;
      padding:15px;
      align-content:center;
    }
    .cart-card {
      margin:0px 40px;
      height:auto;
      border:solid 2px white;
      background-color:#ffffe6;
      padding:20px;
      box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);
    }
    /* pre{
      white-space:pre-wrap;
      word-wrap: break-word;
      color:white;  
    } */
    .row-title {
    padding-bottom: 10px;
    padding-top: 10px;
    border-top: none;
    border-bottom: 1px solid #e1e1e1;
    margin: 0;
    display:flex;
}

.row-title h6 {
    line-height: 20px;
    font-size: 16px;
    color: #000;
    margin: 10px 0 0;

}
.row-title span{
    line-height: 20px;
    font-size: 18px;
    color: #000;
    margin: 10px 0 0;
    
}

.shopping-cart-item {
    border-bottom: 1px solid #e1e1e1;
    margin: 0;
}

img.img-product-cart {
    display: block;
    max-width: 100%;
    height: auto;
    border: 1px solid #ddd;
    padding: 5px;
}

.wrap .name a {
    color: #000;
}

.wrap .name {
    font-size: 14px;
    margin-bottom: 5px;
}

.policyProduct img {
    margin-right: 5px;
}

.wrap .action .btn-link {
    border: 0;
    color: #2c6fb0;
    font-size: 13px;
    margin-right: 12px;
    position: relative;
    padding: 0;
    text-transform: none;
    line-height: normal;
}

.text-pink {
    color: rgb(255, 125, 125) !important;
}

.price-number {
    border: none;
}

.wrap .price {
    font-size: 14px;
    margin-bottom: 5px;
    font-weight: 700;
    padding-top: 0;
}

.control-qty {
    display: flex;
}

.btn-number {
    padding-left: 5px;
    padding-right: 5px;
}

.input-qty {
    width: 30px;
}

.total-price {
    border-top: 2px solid gray;
    border-bottom: 1px solid #e1e1e1;
}

p.text-total {
    font-weight: bold;
    font-size: 18px;
    display:inline-block;
}

.total-number-price {
    border: none;
    color: #000;
    font-weight: bold;
}

.min-input {
    display: inline-block;
    float: left;
    width: calc(100% - 70px);
    border-bottom-right-radius: 0px;
    border-top-right-radius: 0px;
}

.information-more {
    min-height: 125px;
}

@media (max-width: 426px) {
    img.img-product-cart {
        padding: 5px;
    }

    .btn-style-add {
        font-size: 14px;
        width: 140px;
    }
}
    a.btn-cart {
        text-decoration:none;
        font-size:15px;
        color:#fff;
        opacity:0.6;
        background-color: #9acd32;
        display:inline-block;
        padding:4px 8px;
        margin:5px;
        width:auto;
        float:right;
        text-align:center;
        border-radius:20px;
        border:1px solid #9acd32;
        box-shadow: 0px 6px 20px 0px rgba(0,0,0,0.2);
        transition: all ease-in-out 0.2s;
        cursor: pointer;
    }
    a.btn-cart:hover{
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
    </style>

  </head>
  <body>
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
        <section class="cart">
            <div class="container bg-white pt-2 mb-5">
                    <div class="wrap">
                        <div class="row">
                            <div class="col-md-12 cart-col-1">
                                <div class="row-title">
                                    <div class="col-6">
                                        <h6>Sản phẩm</h6>
                                    </div>
                                    <div class="col-md-2 d-none d-md-block">
                                        <h6>Giá (VNĐ)</h6>
                                    </div>
                                    <div class="col-md-2 d-none  d-md-block">
                                        <h6>Số lượng</h6>
                                    </div>
                                    <div class="col-md-2 d-none d-md-block">
                                        <h6>Thành tiền</h6>
                                    </div>
                                </div>
                                <!-- Product in cart -->
                                    <div class="row shopping-cart-item m-0 pt-3 pb-2">
                                        <div class="col-lg-4 col-md-3 col-3 img-thumnail-custom">
                                            <p class="image">
                                                <a href="" title="">
                                                    <img class="img-product-cart" src="{{url('https://image.pharmacity.vn/live/uploads/2019/08/P15192_1_l.jpg')}}"
                                                        alt="" width="100%">
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-9">
                                            <p class="name">
                                                <a href="" title="">Dầu dưỡng nuôi dưỡng và bảo vệ tóc Mega NNO Hair Serum (3 vỉ x 5 viên/hộp)</a>
                                            </p>
                                            <p class="action">
                                                <form action="" method="">
                                                    <button type="submit" class="btn btn-link btn-item-delete" title="xóa sản phẩm">Xóa</button>
                                                </form>
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p class="price text-pink"><input class="price price-number text-pink" type="text" value="" readonly>230,000</p>
                                        </div>
                                        <div class="col-3 col-md-2">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="quantity">
                                                        <div class="control-qty">
                                                            <form action="" method="">
                                                                <button type="submit" class="btn-number" data-type="minus" data-field="qty1" name="qtyminus">-</button>
                                                                <input type="hidden" name="qty" value="">
                                                                <input type="hidden" name="id" value="">
                                                            </form>
                                                            <input class="input-qty ml-2 text-center" readonly type="text" value="1" min=""1 max="100" name="qty1">
                                                            <form action="" method="">
                                                                <button type="submit" class="ml-2 btn-number" data-type="minus" data-field="qty1" name="qtyplus">+</button>
                                                                <input type="hidden" name="qty" value="">
                                                                <input type="hidden" name="id" value="">
                                                            </form>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <p class="price text-pink"><input class="price price-number text-pink" type="text" value="" readonly></p>
                                        </div>
                                    </div>
                                    <div class="row shopping-cart-item m-0 pt-3 pb-2">
                                        <div class="col-lg-4 col-md-3 col-3 img-thumnail-custom">
                                            <p class="image">
                                                <a href="" title="">
                                                    <img class="img-product-cart" src="{{url('https://image.pharmacity.vn/live/uploads/2020/04/P17351_1_l.jpg')}}"
                                                        alt="" width="100%">
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-9">
                                            <p class="name">
                                                <a href="" title="">Thực phẩm bảo vệ sức khỏe bổ sung vitamin E Mega Natural Vitamin E 400IU (Chai 30 viên)</a>
                                            </p>
                                            <p class="action">
                                                <form action="" method="">
                                                    <button type="submit" class="btn btn-link btn-item-delete" title="xóa sản phẩm">Xóa</button>
                                                </form>
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p class="price text-pink"><input class="price price-number text-pink" type="text" value="" readonly>90,000</p>
                                        </div>
                                        <div class="col-3 col-md-2">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="quantity">
                                                        <div class="control-qty">
                                                            <form action="" method="">
                                                                <button type="submit" class="btn-number" data-type="minus" data-field="qty1" name="qtyminus">-</button>
                                                                <input type="hidden" name="qty" value="">
                                                                <input type="hidden" name="id" value="">
                                                            </form>
                                                            <input class="input-qty ml-2 text-center" readonly type="text" value="1" min=""1 max="100" name="qty1">
                                                            <form action="" method="">
                                                                <button type="submit" class="ml-2 btn-number" data-type="minus" data-field="qty1" name="qtyplus">+</button>
                                                                <input type="hidden" name="qty" value="">
                                                                <input type="hidden" name="id" value="">
                                                            </form>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <p class="price text-pink"><input class="price price-number text-pink" type="text" value="" readonly></p>
                                        </div>
                                    </div>
                                <!-- <div class="row total-price pt-3 m-0">
                                    <div class="col-6 col-md-7 col-lg-8">
                                        <div><a href="">Xóa tất cả sản phẩm trong giỏ</a></div>
                                    </div> -->
                                    <div class="col-12 col-md-5 col-lg-4" style="float:right">
                                        <p class="text-total">
                                            <span class="text-right">Tổng cộng: </span>
                                            <span class="total">
                                                <input class="total-number-price ml-2 text-left" type="text" value="" id="qty1" name="qty1" readonly> 320,000
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class=" text-right m-3" style="float:right;flex:auto">
                                    <a class="btn-cart" href="">Chọn thêm sản phẩm</a>
                                    <a class="btn-cart" href="">Tiến hành đặt hàng</a>
                                    
                                </div>
                                <!-- End Product in cart -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  </div>
  </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @include('fragments.footer3')
</body>
</html>


