@extends('layouts.default')

@section('content')

<<<<<<< HEAD
{{-- CAROU-SEL  --}}
<section class="carousel my-1 mx-1">
    @include('fragments.carousel')
</section>
{{-- CAROU-SEL --}}

{{-- Promotion --}}
<section class="promotion container">
    @include('fragments.promotion')
</section>
{{-- End Promotion --}}


<div class="container section-title-container container">
    <h3 class="section-title section-title-center">
        <b></b>
        <span class="section-title-main">Sản phẩm mới</span>
        <b></b>
    </h3>
</div>

{{-- PRODUCT --}}
<div class="container my-5">
    <div class="row">

        <div class="wrap__product">
            @foreach ($productGlobal as $p)
            <x-product :product="$p" />
            @endforeach
        </div>
    </div>

    <div class="container section-title-container container">
        <h3 class="section-title section-title-center">
            <b></b>
            <span class="section-title-main">Sản phẩm bán chạy</span>
            <b></b>
        </h3>
    </div>

    {{-- PRODUCT --}}
    <div class="container my-5">
        <div class="row">
=======
<div class="container section-title-container container">
    <h3 class="section-title section-title-center">
        <b></b><span class="section-title-main">Sản phẩm mới</span><b></b>
    </h3>
</div>


{{-- PRODUCT --}}
<div class="container my-2">
    {{-- <div class="row"> --}}
>>>>>>> 2fc7c06f80385e349cc6db659be4d47fe87199de
            <div class="wrap__product">
                @foreach ($productGlobal as $p)
                    <div class="col-3">
                        <x-product :product="$p" />
                    </div>
                @endforeach
            </div>
<<<<<<< HEAD
        </div>
    </div>
    {{-- END PRODUCT --}}

    <div class="container section-title-container container">
        <h3 class="section-title section-title-center">
            <b></b>
            <span class="section-title-main">Tin tức nổi bật</span>
            <b></b>
        </h3>
    </div>

    <section class="news-hot">
        <div class="news-hot-content">
            <div class="news_item g-tem1">
                <img src="{{ asset('images/promotion/banner-web-5.jpg')}}" alt="">
            </div>
            <div class="news_item g-item2 list-news">
                <ul>
                    <li>1. TIN NONG HOI TRONG NGAY</li>
                    <li>2. TIN NONG HOI TRONG NGAY</li>
                    <li>3. TIN NONG HOI TRONG NGAY</li>
                    <li>4. TIN NONG HOI TRONG NGAY</li>
                    <li>5. TIN NONG HOI TRONG NGAY</li>
                </ul>
            </div>
        </div>
    </section>


{{-- USE-MORE --}}
{{-- @include('fragments.use-more') --}}
{{-- END USE-MORE --}}

{{-- ABOUT PAGE --}}
@include('fragments.about')
{{-- END ABOUT PAGE --}}

    @endsection

    @section('style')
    <style>

        /* NEWS-HOT */
        .news-hot{
            margin: 30px auto;
        }
        .news-hot-content{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
        }
        .news-hot .news_item{
            padding: 10px;
        }
        .news-hot .news_item img{
            width: 100%;
        }
    </style>

    @endsection


//HOME.BLADE
=======
    {{-- </div> --}}
</div>
{{-- END PRODUCT --}}

<div class="container section-title-container container">
    <h3 class="section-title section-title-center">
        <b></b><span class="section-title-main">Sản phẩm khyến mãi</span><b></b>
    </h3>
</div>

{{-- PRODUCT --}}
<div class="container my-2">
    {{-- <div class="row"> --}}
            <div class="wrap__product">
                @foreach ($productGlobal as $p)
                    <div class="col-3">
                        <x-product :product="$p" />
                    </div>
                @endforeach
            </div>
    {{-- </div> --}}
</div>
{{-- END PRODUCT --}}

@endsection

@section('style')
<style>
    /* CSS PRODUCT  */
    /* .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        align-items: center;
        text-align: center;
        font-family: arial;
    }
    .price {
        color: grey;
        font-size: 22px;
    }
    .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }
    .card button:hover {
        opacity: 0.7;
    } */
<<<<<<< HEAD
=======
/*
>>>>>>> 0aae63810c0af3747f08b4fad4ceb09293b02440
    .grid-container {
        margin: auto;
        display: grid;
        grid-gap: 50px 30px;
        grid-template-areas: 'myArea myArea myArea myArea';
<<<<<<< HEAD
    }
=======
    } */

>>>>>>> 0aae63810c0af3747f08b4fad4ceb09293b02440
    /* END CSS PRODUCT  */
</style>
@endsection
>>>>>>> 2fc7c06f80385e349cc6db659be4d47fe87199de
