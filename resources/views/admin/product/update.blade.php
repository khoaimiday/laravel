@extends('admin.Adminlayout')
@section('title', 'Updated Product - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
        <section class="py-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <form action="{{url("admin/product/postUpdate/".$p->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <h6 class="text-uppercase mb-0">Product Details </h6>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <!-- Image Feature And Gallery -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                {{-- <div class="col-md-2 d-flex justify-content-start">
                                                <div class="product-slider">
                                                    <div id="ThumbProduct" class="carousel slide" data-interval="false">
                                                        <div class="carousel-inner">
                                                            <div class="item active">
                                                                @foreach($galleryThum as $galleryThum)
                                                                <div data-target="#CarouselProduct" data-slide-to="{{++$no}}"
                                                class="SubThumbProduct rounded mb-3">
                                                <img src="{{asset('img/gallery/'.$pro->image)}}" class="rounded"
                                                    width="50px" height="50px">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-10 d-flex justify-content-center">
                            <div id="CarouselProduct" class="carousel slide" data-ride="carousel"
                                style="max-width: 100%; max-height: auto;">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"> <img class="rounded"
                                            src="{{asset('img/feature/'.$p->image)}}" height="auto" width="100%"> </div>
                                    {{-- @foreach($galleryFea as $galleryFea) --}}
                                    <div class="carousel-item active"> <img class="rounded"
                                            src="{{asset('img/feature/'.$p->image)}}" height="auto" width="100%"> </div>
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- Info   -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">Product ID</label>
                            <input type="text" class="form-control" value="{{$p->id}}" name="id" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">Product Title</label>
                            <input type="text" class="form-control" value="{{$p->product_name}}" name="prodName">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">Price</label>
                            <input type="text" class="form-control" value="{{$p->price}}" name="prodPrice">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">Unit</label>
                            <input type="text" class="form-control" value="{{$p->product_unit}}" name="prodUnit">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">Quantity</label>
                            <input type="text" class="form-control" value="{{$p->product_quantity}}" name="prodQuantity">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Sold Out, Status, Category, Brand -->
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="form-group">
                <label class="form-control-label text-uppercase">Sold Out</label>
                <input type="text" class="form-control" value="{{$p->sold_out}}" name="sollOut">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="form-control-label text-uppercase">Status active<span class="required">*</span></label>
                <select name="sts_cd" class="form-control">
                    <option value="A" @if (!isset($p->deleted_at)) selected @endif> Active</option>
                    <option value="D" @if (isset($p->deleted_at)) selected @endif> DeActive</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="form-control-label text-uppercase">Category <span class="required">*</span></label>
                <select name="prodCate" class="form-control">
                    @foreach ($c as $c)
                    <option value="{{$c->id}}" @if ($c->id === $p->product_types_id)
                        selected
                        @endif
                        >
                        {{$c->type_name}}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('prodCate'))
                <small style="color:red;font-size:14px;">{{$errors->first('prodCate')}}</small>
                @endif
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="form-control-label text-uppercase">Brands <span class="required">*</span></label>
                <select name="prodBrand" class="form-control">
                    @foreach ($b as $b)
                    <option value="{{$b->id}}" @if ($b->id === $p->brand_id)
                        selected
                        @endif
                        >
                        {{$b->brand_name}}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('prodBrand'))
                <small style="color:red;font-size:14px;">{{$errors->first('prodBrand')}}</small>
                @endif
            </div>
        </div>
    </div>
    <!-- Warranty Period, Create At -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label text-uppercase">Warranty Period</label>
                <input type="text" class="form-control" value="{{$p->exp_date}}" name="prodWarranty">
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Create At</label>
                        <input type="text" class="form-control" value="{{$p->created_at}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label text-uppercase">Update At</label>
                        <input type="text" class="form-control" value="{{$p->updated_at}}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Short Description -->
    <div class="row">
        <div class="col-12 form-group">
            <label class="form-control-label text-uppercase">Short Description</label>
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" name="shortDesc" rows="3"
                value="">{{$p->short_description}}</textarea>
        </div>
    </div>
    <!-- Long Description -->
    <div class="row">
        <div class="col-12 form-group">
            <label class="form-control-label text-uppercase">Long Description</label>
            <textarea class="form-control ckeditor" id="exampleFormControlTextarea1" name="longDesc"
                rows="3">{!!$p->long_description!!}</textarea>
            <script>
                CKEDITOR.replace( 'longDesc', {
                                                    language: 'en',
                                                    uiColor: '#9AB8F3'
                                                });
            </script>
        </div>
    </div>
</div>
</div>
<div class="card-footer">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </div>
</div>
</div>
</form>
</div>
</div>
</section>
</div>
<!-- Slider -->
<script>
    $(document).ready(function() {
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
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        });
</script>
@endsection
