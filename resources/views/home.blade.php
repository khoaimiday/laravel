@extends('layouts.default')

@section('content')


{{-- CAROU-SEL  --}}
<section class="carousel">
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
        <b></b><span class="section-title-main">Sản phẩm mới</span><b></b>
    </h3>
</div>

    {{--NEW PRODUCT --}}
    <div class="container my-2">
        <div class="row">
                @foreach ($newProduct as $p)
                    <div class="col-md-3 col-sm-6">
                        <x-product :product="$p" />
                    </div>
                @endforeach
        </div>
    </div>

    <div class="container section-title-container container">
        <h3 class="section-title section-title-center">
            <b></b><span class="section-title-main">Sản phẩm bán chạy</span><b></b>
        </h3>
    </div>


        {{--NEW PRODUCT --}}
        <div class="container my-2">
            <div class="row">
                    @foreach ($soldProduct as $p)
                        <div class="col-md-3 col-sm-6">
                            <x-product :product="$p" />
                        </div>
                    @endforeach
            </div>
        </div>
    {{-- END PRODUCT --}}

    <div class="container section-title-container container">
        <h3 class="section-title section-title-center">
            <b></b>
            <span class="section-title-main">Blog chăm sóc sức khoẻ</span>
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
@include('fragments.use-more')
{{-- END USE-MORE --}}

{{-- ABOUT PAGE --}}
@include('fragments.about')
{{-- END ABOUT PAGE --}}

    @endsection

    @section('style')
    <style>

        /* NEWS-HOT */
        .news-hot{
            width: 60%;
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
