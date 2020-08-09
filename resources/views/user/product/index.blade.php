@extends('layouts.default')
@section('title', 'Test')

@section('content')

{{-- PRODUCT --}}
<div class="container my-5">
    {{-- <h3 class="text-primary mb-3">SẢN PHẨM BÁN CHẠY</h3> --}}

    <div class="container product__box">
        <div class="row">
            <!-- Sidebara-->
            <div class="sidebar col-xl-3 col-lg-4 border-right" style="margin: 28px 0 0 0;">
                <!-- Headphone Type -->
                <div class="form-group">
                    <h6 class="text-uppercase text-center w_title">NHÓM CHỨC NĂNG</h6>
                    <hr width="100%" style="margin-left: 0;">

                    @foreach($productType as $c)
                    <h6 class="ml-3"><i class="fas fa-cannabis"></i><a class="filter-li"
                            href="{{url('search/cate/'.$c->id)}}">{{$c->type_name}}</a></h6>
                            <hr width="100%" style="margin-left: 0;">
                    @endforeach

                </div>
                <!-- Brand -->
                <form action="{{url('search/searchByFilter')}}" method="GET">
                    @csrf
                <div class="form-group mt-5">
                    <h6 class="text-uppercase text-center w_title">NHÀ CUNG CẤP</h6>
                    <hr width="100%" style="margin-left: 0;">
                    <label for=""></label>
                    @foreach($brandGlobal as $b)
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="brand[]" id="" value="{{$b->id}}">
                        {{$b->brand_name}}
                      </label>
                    </div>
                    @endforeach
                </div>
                <!-- Sorted By -->
                    <div class="form-group mt-5">
                        <h6 class="text-uppercase w_title">Sorted By</h6>
                        <hr width="100%" style="margin-left: 0;">
                        <select class="form-control" id="sortedBy" name="sortBy">
                            <option value="0">Select sorting function</option>
                            <option value="1">Price Ascending</option>
                            <option value="2">Price Descending</option>
                            <option value="3">A - Z</option>
                            <option value="4">Z - A</option>
                        </select>
                    </div>
                    <!-- Price -->
                    <div class="form-group">
                        <h6 class="text-uppercase w_title">Price</h6>
                        <hr width="100%" style="margin-left: 0;">
                        <div class="form-group d-flex justify-content-center">
                            <input type="number" class="form-control" value="0" min="0"
                                style="color: black; margin-right: 10px;" name="fromPrice">
                            <input type="number" class="form-control" value="" max="10000000"
                                style="color: black; margin-left: 10px;" name="toPrice">
                        </div>
                    </div>
                    <!-- Button Filter -->
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" class="form-control btn btn-primary">Filter</button>
                    </div>
                </form>
            </div>
            <!-- /Sidebara end-->
            <!-- Content -->
            <div class="col-xl-9 col-lg-8">
                <!-- Row 1 -->
                {{-- @if($message != 'a')
                <div class="alert alert-danger mt-5">
                    <h5 class="text-center">{{$message}}</h5>
                </div>
                @endif --}}
                <div class="row product_list d-flex">
                    @foreach ($products as $p)

                    <div class="col-xl-3 my-5">
                            <div class="wrap__product">
                                <x-product :product="$p" />
                            </div>
                    </div>
                    @endforeach
                </div>
                <div class="row justify-content-center">
                    <div class="">{!! $products->links() !!}</div>
                </div>

                </div><br>
            </div>
            <!-- /Content end -->
        </div>
    </div>
    {{-- END PRODUCT --}}



    @endsection

    @section('style')
    <style>
        /* CSS PRODUCT  */

        .product__box .sidebar .form-group a{
            color: #1b74e7;
            display: inline-block;
            padding: 6px 0;
            margin-left: 1em;
            -ms-flex: 1;
            flex: 1;
            text-decoration: none;
        }
        .product__box .sidebar .form-group a:hover{
            color: #777575;
        }
        .sidebar .w_title{
            font-size: 1em;
            font-weight: 600;
            line-height: 1.05;
            letter-spacing: .05em;
            text-transform: uppercase;
            color: #777;
        }
        /* END CSS PRODUCT  */
    </style>
    @endsection


