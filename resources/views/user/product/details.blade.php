@extends('layouts.default')
@section('title', 'Product Details')

@section('content')

<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12">
                <h1>Product Details</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{-- {{ Breadcrumbs::render('product-detail', $product) }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details -->
<div class="container product_details py-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-lg-6">
            <div id="CarouselProduct" class="carousel slide shadow-none" data-ride="carousel"
                style="max-width: 100%; max-height: auto;">
                <div class="carousel-inner">
                    <div class="carousel-item  active"> <img class="rounded"
                            src="https://image.pharmacity.vn/live/uploads/2020/02/P16935_1-1-600x600.jpg" height="auto"
                            width="90%"> </div>
                    @foreach($productGlobal as $galleryFea)
                    <div class="carousel-item"> <img class="rounded"
                            src="https://image.pharmacity.vn/live/uploads/2020/02/P16935_1-1-600x600.jpg" height="auto"
                            width="90%"> </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="product-slider">
                <div id="ThumbProduct" class="carousel slide" data-interval="false">
                    <div class="carousel-inner">
                        <div class="item active">
                            @foreach($productGlobal as $galleryThum)
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
                <p class="product_name">NƯỚC RỬA TAY ONE (6ML)</p>
            </div>
            <div class="row">
                <p class="product_cate mb-3">Brand: <a href="">ONE CLEAR</a></p>
            </div>
            <div class="row">
                <p class="price product-page-price ">
                    <span class="woocommerce-Price-amount amount">28,000 <span class="woocommerce-Price-currencySymbol">
                            VND</span></span>
                    <span class="uom">/Chai</span></p>
            </div>
            <div class="row">
                <p class="product_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet
                    voluptas ex, quidem exercitationem asperiores consectetur cum ratione est ipsam id minus? Nisi, vero
                    doloribus impedit ut officia excepturi alias.</p>
            </div>

            {{--Form Cart--}}
            <form action="" method="POST" class="from-cart">
                @csrf
                <div class="row d-flex py-4">
                    <div class="quantity buttons_added add__cart col-md-3 d-flex  justify-content-center">
                        <input type="button" value="-" class="minus button is-form rounded-0 ">
                        {{-- <label class="screen-reader-text" for="quantity_5f239d60ccf6d">Số lượng</label> --}}
                        <input type="number" id="quantity_5f239d60ccf6d" class="input-text qty text rounded-0" step="1"
                            min="1" max="2862" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*"
                            inputmode="numeric" aria-labelledby="Gel rửa tay khô  hương lotus rice On1 (60ml) quantity">
                        <input type="button" value="+" class="plus button is-form rounded-0 ">
                    </div>
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary wide btn-md btn-block add__cart"><i
                                class="fas fa-shopping-cart"></i> Add to Cart</button>
                    </div>
            </form>
            {{--End Form--}}
            {{--Form--}}
            <form action="" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="idProduct" value="$product->id}}">
                <input type="number" id="2" name="addQuantity" style="display:none" min="1" value="$quantity}}">
                <button type="submit" class="btn btn-success wide btn-md btn-block add__cart"><b>Buy Now</b></button>

            </form>
            {{--End Form--}}
        </div>
        <div class="row">
            <div class="product_meta"> <span class="sku_wrapper">SKU: <span class="sku">P17783</span></span> <span
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
<div class="container product-description bg-white card mb-5">
    <div class="row py-3">
        <div class="col ">
            <ul class="nav nav-pills d-flex justify-content-center">
                <li class="nav-item"><a data-toggle="tab" href="#description" class="nav-link active"
                        aria-selected="true" style="margin-right: 15px;">Description</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#reviews" class="nav-link" aria-selected="false"
                        style="margin-left: 15px;">Reviews</a></li>
            </ul>
            <div class="tab-content">
                <div id="description" class="tab-pane active">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum corrupti modi delectus non amet
                        tenetur eum quod, nulla inventore quibusdam aliquam? Quidem ipsa autem iste quos quia, molestias
                        magnam cupiditate!
                        Tempore expedita voluptatum suscipit eveniet, qui consequatur sunt! Magni ad repudiandae fuga
                        quasi alias recusandae consequatur sunt tempore voluptas voluptatem veritatis, facilis deserunt,
                        dolorum perspiciatis in, itaque necessitatibus placeat distinctio.
                        Debitis labore reprehenderit, eos doloremque, et nobis excepturi ea architecto est sint iusto
                        nostrum harum dignissimos. Vitae nihil nostrum eum, hic ea sequi minus ab repellendus non fugit
                        praesentium modi.
                        Debitis, optio maiores. Perferendis molestiae omnis sunt iure debitis quia provident quibusdam
                        autem aperiam aliquam explicabo libero, repellat sint pariatur quis, voluptate blanditiis magni
                        temporibus? Optio maiores unde nihil beatae!
                        Obcaecati perspiciatis quisquam sed mollitia aspernatur eum asperiores, accusamus aut possimus,
                        unde, quaerat eaque inventore illo magnam repellat modi earum quo minus fugit maiores facilis
                        iusto velit necessitatibus. Neque, architecto!</p>
                </div>
                <div id="reviews" class="tab-pane">
                    @foreach($productGlobal as $comment)
                    <div class="row review d-flex justify-content-center">
                        <div class="col-3 text-center"><img src="" alt="$comment->name}}"
                                class="review-image"><span>$comment->created_at}}</span></div>
                        <div class="col-9 review-text" style="padding-right: 65px;">
                            <h6>$comment->name}}</h6>
                            <hr width="100%">
                            <p>{$comment->cmt_content}}</p>
                        </div>
                    </div>
                    @endforeach
                    @auth
                    <div class="row review d-flex justify-content-center">
                        <div class="col-3 text-center"><img src="" alt="{{Auth::user()->name}}"
                                class="review-image"><span></span></div>
                        <div class="col-9 review-text" style="padding-right: 65px;">
                            <form role="form" action="" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div>
                                    <h6>{{Auth::user()->name}}</h6>
                                    <hr width=" 100%">
                                </div>
                                <div class="form-group">
                                    <textarea name="postComment" id="" class="form-control"
                                        placeholder="Looks like you want to share something ?"></textarea>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="submit" class="btn btn-success" value="Post">
                                </div>
                            </form>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <!-- Product Title: You May Also Like -->
<div class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12">
                <h1 style="text-align: center;">You May Also Like</h1>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Similar Product -->
<div class="container">
    <div class="row py-5">
        @foreach($productGlobal as $similar)
        <div class="col-xl-3">
            <div class="product_grid card-body card d-flex justify-content-center align-items-center">
                <div class="product_image d-flex justify-content-center align-items-center" style="min-height: 220px;">
                    <a href="" class="image ">
                        <!-- <img class="pic_2 rounded" src="img/5.jpg" alt=""> -->
                        <img class="img-fluid rounded" src="" alt="" width="200" height="auto">
                    </a>
                </div>
                <div class="product_content">
                    <h3 class="title"><a href="">$similar->product_title}}</a></h3>
<div class="price">$ $similar->price}}</div>
<a href="" class="btn btn-dark"><i class="fas fa-shopping-cart"></i> Add to cart</a>
</div>
</div>
</div>
@endforeach
</div>
</div> --}}

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
</style>
@endsection
