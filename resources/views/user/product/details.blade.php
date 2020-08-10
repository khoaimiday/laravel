@extends('layouts.default')
@section('title', 'Product Details')

@section('content')


{{-- {{ Breadcrumbs::render('product-detail', $product) }} --}}

<!-- Product Details -->
<div class="container product_details pt-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-lg-6">
            <div id="CarouselProduct" class="slide shadow-none" data-ride="carousel"
                style="max-width: 100%; max-height: auto;">
                <div class="carousel-inner">
                    <div class="carousel-item  active"> <img class="rounded"
                            src="{{ url('img/feature/product/'.$pro->image) }}" height="auto" width="90%"> </div>
                    @foreach($pro as $galleryFea)
                    <div class="carousel-item"> <img class="rounded" src="{{ url('img/feature/product/'.$pro->image) }}"
                            height="500px" width="90%"> </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="product-slider">
                <div id="ThumbProduct" class="carousel slide" data-interval="false">
                    <div class="carousel-inner">
                        <div class="item active">
                            @foreach($pro as $galleryThum)
                            <div data-target="#CarouselProduct" data-slide-to="" class="SubThumbProduct rounded">
                                <img src="" class="rounded" width="50px" height="50px">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Product Info-->
        <div class="col-lg-6">
            <div class="row">
                <p class="product_cate"><a href="">TRANG CHỦ / SẢN PHẨM / CHĂM SÓC CÁ NHÂN / SẢN PHẨM PHÒNG TẮM / NƯỚC
                        RỬA TAY</a></p>
            </div>
            <div class="row">
                <p class="product_name">{{$pro->product_name}}</p>
            </div>
            <div class="row">
                <p class="product_cate mb-3">Brand: <a href="">{{$pro->brand_name}}</a></p>
            </div>
            <div class="row">
                <p class="price product-page-price ">
                    <span class="woocommerce-Price-amount amount">{{$pro->price}}<span
                            class="woocommerce-Price-currencySymbol">
                            VND</span></span>
                    <span class="uom">/{{$pro->product_unit}}</span></p>
            </div>
            <div class="row">
                <p class="product_description">{{$pro->short_description}}</p>
            </div>

            {{--Form Cart--}}
            <form action="" method="POST" class="from-cart">
                @csrf
                <div class="row d-flex py-4 align-items-center">
                    <div class="quantity buttons_added add__cart col-md-3 d-flex  justify-content-center">
                        <input type="button" value="-" class="minus button is-form rounded-0">
                        <input type="number" id="quantity_5f239d60ccf6d" class="input-text qty text rounded-0" step="1"
                            min="1" max="2862" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*"
                            inputmode="numeric" aria-labelledby="Gel rửa tay khô  hương lotus rice On1 (60ml) quantity">
                        <input type="button" value="+" class="plus button is-form rounded-0 ">
                    </div>
                    <div class="col-md-5 pr-1">
                        <button type="submit" class="btn btn-primary wide btn-md btn-block add__cart"><i
                                class="fas fa-shopping-cart"></i> Add to Cart</button>
                    </div>
            </form>
            {{--End Form--}}
            {{--Form--}}
            <div class="col-md-4 pl-0">
                <form action="" method="POST" class="m-0">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-success wide btn-md btn-block add__cart"><b>Buy
                            Now</b></button>
                </form>
            </div>

            {{--End Form--}}
        </div>
        <div class="row">
            <div class="product_meta"> <span class="sku_wrapper">SKU: <span class="sku">{{$pro->id}}</span></span> <span
                    class="posted_in">Danh mục: <a href="https://www.pharmacity.vn/danh-muc-san-pham/cham-soc-ca-nhan/"
                        rel="tag">Chăm sóc cá nhân</a>, <a
                        href="https://www.pharmacity.vn/danh-muc-san-pham/cham-soc-ca-nhan/san-pham-phong-tam/"
                        rel="tag">Sản phẩm phòng tắm</a>, <a
                        href="https://www.pharmacity.vn/danh-muc-san-pham/cham-soc-ca-nhan/san-pham-phong-tam/nuoc-rua-tay/"
                        rel="tag">Nước rửa tay</a></span> <span class="tagged_as">Từ khoá: <a
                        href="https://www.pharmacity.vn/tu-khoa-san-pham/covid/" rel="tag">covid</a></span></div>
        </div>
        <div class="row">
            <div class="col-lg-6 py-3">
                <h6 class="text-uppercase"><i class="fas fa-truck"></i> SHIPPING & DELIVERY</h6>
                <ul class="list-unstyled list-detail-prd">
                    <li><i class="fas fa-check-circle" style="color: green;"></i> Free Shipping Over $30</li>
                    <li><i class="fas fa-check-circle" style="color: green;"></i> Ships in 24 Hours</li>
                    <li><i class="fas fa-check-circle" style="color: green;"></i> 24 Months Warranty</li>
                </ul>
            </div>
            <div class="col-lg-6 py-3">
                <h6 class="text-uppercase"><i class="fas fa-exchange-alt"></i> RETURNS</h6>
                <ul class="list-unstyled list-detail-prd">
                    <li><i class="fas fa-check-circle" style="color: green;"></i> 7 Days Replacement Only</li>
                    <li><i class="fas fa-check-circle" style="color: green;"></i> Certified By Cubumber</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Product Description-->
<div class="container product-description bg-white card mt-10">
    <div class="row">
        <div class="col">
            <ul class="nav nav-pills d-flex justify-content-center mb-4">
                <li class="nav-item"><a data-toggle="tab" href="#description" class="nav-link active"
                        aria-selected="true" style="margin-right: 15px;">Description</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#reviews" class="nav-link" aria-selected="false"
                        style="margin-left: 15px;">Reviews</a></li>
            </ul>
            <div class="tab-content" style="height: 500px;">
                <div id="description" class="tab-pane active">
                    <div>{!!$pro->long_description!!}</div>
                </div>
                <div id="reviews" class="tab-pane">

                    @auth
                    <div class="row review d-flex justify-content-center">
                        <div class="col-6 text-center" id="fetchCmt">
                            @foreach($cmts as $cmt)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Đăng bởi: Người dùng có mã <b>{{$cmt->user_id }}</b> lúc <i>{{$cmt->created_at}}</i>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-title">
                                        <h6> {{$cmt->title}}</h6>
                                    </div>
                                    <div class="panel-content">
                                        <p>{{$cmt->content}}</p>
                                    </div>
                                </div>
                                <div class="panel-footer" align="right">
                                    <button class="btn btn-default reply" type="button">Trả lời</button>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="col-6 review-text" style="padding-right: 65px;">
                            <form role="form" action="{{route('comment',$pro->id)}}" id="cmt_form" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div>
                                    <h6>Xin chào, {{Auth::user()->name}}! Bạn có thắc mắc gì về sản phẩm này không?</h6>
                                    <hr width=" 100%">
                                </div>
                                <div class="form-group">
                                    <label for="">Tiêu đề</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="">Bình luận của bạn</label>
                                    <textarea name="content" id="" class="form-control" cols="30" rows="7"
                                        placeholder="(không được để trống)" required></textarea>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="submit" class="btn btn-info px-3 py-2" id="cmt_submit" value="Gửi">
                                </div>
                            </form>
                            <span id="cmt_messeage"></span>
                            <br>
                            <div id="cmt_display"></div>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Title: You May Also Like -->
<div class="hero hero-page gray-bg padding-small mt-5">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12">
                <h1 style="text-align: center;" class="font-weight-bold">You May Also Like</h1>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Similar Product -->
<div class="container" style="margin-bottom:200px">
    <div class="row my-4">
        @foreach($sameProduct as $p)
        <div class="col-xl-3">
            <div class="wrap__product">
                <x-product :product="$p" />
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- @foreach($comments as $c)
@if($c->reply != null )
<div class="row review d-flex justify-content-center">
    <div class="col-2 text-center">
        <img src="{{ asset('img/admin1.jpg')}}" alt="{{$c->name}}" class="review-image d-block"
            style="width:100px; margin: auto">
        <span style="font-size: .8em; ">{{$c->created_at}}</span></div>
    <div class="col-9 review-text" style="padding: 5px 65px 0 15px;">
        <h6><b>Title:</b> {{$c->title}}</h6>
        <hr width="100%">
        <p>{{$c->content}}</p>
    </div>
</div>
<hr>
@endif
@endforeach -->
@endsection

@section('style')
<style>
    .product_details .carousel {
        box-shadow: 0;
    }

    .product_details .quantity input[type=number] {
        max-width: 2.5em;
        width: 2.5em;
        text-align: center;
        border-radius: 0 !important;
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        appearance: textfield;
        font-size: 1em;
        border-width: 1px;
        border-style: solid;
        border-color: -internal-light-dark(rgb(118, 118, 118), rgb(195, 195, 195));

    }

    .product_details .quantity input[type=button] {
        border-width: 1px;
        border-style: solid;
        border-color: -internal-light-dark(rgb(118, 118, 118), rgb(195, 195, 195));
    }

    .product_details .add__cart {
        /* padding: .25rem .5rem; */
        /* font-size: .8rem; */
        /* line-height: 1.4; */
        border-radius: 0;
    }

    .product_meta {
        width: 100%;
        font-size: .8em;
        margin-bottom: 1em;
    }

    .product_meta>span {
        display: block;
        border-top: 1px dotted #ddd;
        padding: 5px 0;
    }

    .product_details .from-cart .button {
        width: 30px;
    }
</style>
@endsection

<script>
    $(document).ready(function () {
        $("#content-slider").lightSlider({
            loop: true,
            keyPress: true
        });
        $('#image-gallery').lightSlider({
            gallery: true,
            item: 1,
            thumbItem: 9,
            slideMargin: 0,
            speed: 500,
            auto: true,
            loop: true,
            onSliderLoad: function () {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });


        $("#cmt_submit").on("click",function(){
            $.ajax({
                url: "/fetchCmt",
                method: "GET",
            }).done(function(response){
                $("#fetchCmt").empty();
                $("#fetchCmt").html(response);
            }
        }
    });

</script>