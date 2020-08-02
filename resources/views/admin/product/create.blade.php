@extends('admin.Adminlayout')
@section('title', 'Create New Product - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row" style="justify-content: center;">
          <div class="col-lg-8 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Create new product</h6>
              </div>
              <div class="card-body">
                    @if(Session::has('flash_message'))
                      <div class="alert alert-{!! Session::get('flash_level') !!}">
                          {!!Session::get('flash_message')!!}
                      </div>
                    @endif
                    {{-- @include('admin.product.form-error') --}}
                    <form role="form" action="{{url("admin/product/postCreate")}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">ID<span class="required">*</span></label>
                        <input type="number" class="form-control" name="id">
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Product Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="product_name">
                        @if($errors->has('product_name'))
                           <small style="color:red;font-size:14px;">{{$errors->first('product_name')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Price<span class="required">*</span></label>
                        <input type="number" class="form-control" name="price" min="0" max="10000000">
                        @if($errors->has('price'))
                           <small style="color:red;font-size:14px;">{{$errors->first('price')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Loại sản phẩm <span class="required">*</span></label>
                        <input type="text" class="form-control" name="product_types_id">
                        @if($errors->has('product_types_id'))
                           <small style="color:red;font-size:14px;">{{$errors->first('product_types_id')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Brands <span class="required">*</span></label>
                        <input type="text" class="form-control" name="brand_id">
                        @if($errors->has('brand_id'))
                           <small style="color:red;font-size:14px;">{{$errors->first('brand_id')}}</small>
                        @endif 
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Short Description <span class="required">*</span></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="short_description"rows="3"></textarea>
                        @if($errors->has('short_description'))
                           <small style="color:red;font-size:14px;">{{$errors->first('short_description')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Long Description <span class="required">*</span></label>
                        <textarea class="form-control ckeditor" id="exampleFormControlTextarea1" name="long_description" rows="3"></textarea>
                        @if($errors->has('long_description'))
                           <small style="color:red;font-size:14px;">{{$errors->first('long_description')}}</small>
                        @endif
                        <script>
                            CKEDITOR.replace( 'long_description', {
                                language: 'en',
                                uiColor: '#9AB8F3'
                            });
                        </script>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Upload Feature Image: <span class="required">*</span></label><br>
                        <input type="file" class="custom-fileip" name="image"><br>
                          @if($errors->has('image'))
                            <small style="color:red;font-size:14px;">{{$errors->first('image')}}</small>
                          @endif
                      </div>
                      <!-- <div class="form-group ">
                        <label class="form-control-label text-uppercase">Please press Ctrl to choose multiple images:</label><br>
                        <input type="file" class="custom-fileip" name="galleryimg[]" multiple>
                      </div><br> -->
                      <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Create</button>
                        <button type="reset" class="btn btn-lg btn-warning">Reset</button>
                      </div>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
