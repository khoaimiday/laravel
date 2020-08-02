@extends('admin.Adminlayout')
@section('title', 'Updated Product - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
        <section class="py-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <form action="{{url("admin/categories/postUpdate/".$cate->id)}}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <h6 class="text-uppercase mb-0">Cập Nhật Loại Sản Phẩm</h6>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                {{-- <div class="col-md-2 d-flex justify-content-start">
                                                    <div class="product-slider">
                                                        <div id="ThumbProduct" class="carousel slide" data-interval="false">
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    @foreach($galleryThum as $galleryThum)
                                                                    <div data-target="#CarouselProduct" data-slide-to="{{++$no}}" class="SubThumbProduct rounded mb-3">
                                                                        <img src="{{asset('img/gallery/'.$pro->image)}}" class="rounded" width="50px" height="50px">
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="col-md-10 d-flex justify-content-center">
                                                    <div id="CarouselProduct" class="carousel slide" data-ride="carousel" style="max-width: 100%; max-height: auto;">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item  active"> <img class="rounded" src="{{asset('img/feature/'.$cate->type_image)}}" height="auto" width="100%"> </div>
                                                            {{-- @foreach($galleryFea as $galleryFea) --}}
                                                            <div class="carousel-item"> <img class="rounded" src="{{asset('img/feature/'.$cate->type_image)}}" height="auto" width="100%"> </div>
                                                            {{-- @endforeach --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-3 form-group">
                                                        <label class="form-control-label text-uppercase">*ID</label>
                                                    <input type="text" class="form-control" name="cateName" value="{{ $cate->id}}" readonly>
                                                    </div>
                                                    <div class="col-9 form-group">
                                                        <label class="form-control-label text-uppercase">NAME<span class="required">*</span></label>
                                                    <input type="text" class="form-control" name="cateName" value="{{ $cate->type_name}}">
                                                        @if($errors->has('cateName'))
                                                            <small style="color:red;font-size:14px;">{{$errors->first('cateName')}}</small>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-12">
                                                      <label class="form-control-label text-uppercase">DESCRIPTION<span class="required">*</span></label>
                                                  <textarea class="form-control" id="exampleFormControlTextarea1" name="cateDesc" rows="3">{{ $cate->description}}</textarea>
                                                      @if($errors->has('cateDesc'))
                                                         <small style="color:red;font-size:14px;">{{$errors->first('cateDesc')}}</small>
                                                      @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label text-uppercase">Status active<span class="required">*</span></label>
                                                    <select name="sts_cd" class="form-control">
                                                        <option value="A" @if (!isset($cate->deleted_at)) selected @endif> Active</option>
                                                        <option value="D" @if (isset($cate->deleted_at)) selected @endif> DeActive</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                  <label class="form-control-label text-uppercase">Upload Feature Image: <span class="required">*</span></label><br>
                                                  <input type="file" class="custom-fileip" name="cateImg"><br>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                  <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                  <button type="reset" class="btn btn-lg btn-warning">Reset</button>
                                                </div>
                                        </div>
                                    </div>
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
