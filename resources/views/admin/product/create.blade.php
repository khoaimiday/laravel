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
                        <label class="form-control-label text-uppercase">Product Title <span class="required">*</span></label>
                        <input type="text" class="form-control" name="prodName">
                        @if($errors->has('prodName'))
                           <small style="color:red;font-size:14px;">{{$errors->first('proprodNameName')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Price<span class="required">*</span></label>
                        <input type="number" class="form-control" name="prodPrice" min="0" max="10000">
                        @if($errors->has('prodPrice'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prodPrice')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Category <span class="required">*</span></label>
                          <select name="prodCate" class="form-control">
                            <option value="0">None</option>
                            <option value="1">In Ear</option>
                            <option value="2">On Ear</option>
                            <option value="3">True-Wireless</option>
                          </select>
                          @if($errors->has('prodCate'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prodCate')}}</small>
                          @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Brands <span class="required">*</span></label>
                          <select name="prodBrand" class="form-control">
                            <option value="0">None</option>
                            <option value="1">Loại 1</option>
                            <option value="2">Loại 2</option>
                            <option value="3">Loại 3</option>
                            <option value="4">Loại 4</option>
                            <option value="5">Loại 5</option>
                          </select>
                          @if($errors->has('prodBrand'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prodBrand')}}</small>
                          @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Warranty_Period <span class="required">*</span></label>
                        <input type="number" class="form-control" name="prodWarranty" min="6">
                        @if($errors->has('prodWarranty'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prodWarranty')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Short Description <span class="required">*</span></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="shortDesc"rows="3"></textarea>
                        @if($errors->has('shortDesc'))
                           <small style="color:red;font-size:14px;">{{$errors->first('shortDesc')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Long Description <span class="required">*</span></label>
                        <textarea class="form-control ckeditor" id="exampleFormControlTextarea1" name="longDesc" rows="3"></textarea>
                        @if($errors->has('longDesc'))
                           <small style="color:red;font-size:14px;">{{$errors->first('longDesc')}}</small>
                        @endif
                        <script>
                            CKEDITOR.replace( 'longDesc', {
                                language: 'en',
                                uiColor: '#9AB8F3'
                            });
                        </script>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Upload Feature Image: <span class="required">*</span></label><br>
                        <input type="file" class="custom-fileip" name="featureImg"><br>
                          @if($errors->has('featureImg'))
                            <small style="color:red;font-size:14px;">{{$errors->first('featureImg')}}</small>
                          @endif
                      </div>
                      <div class="form-group ">
                        <label class="form-control-label text-uppercase">Please press Ctrl to choose multiple images:</label><br>
                        <input type="file" class="custom-fileip" name="galleryimg[]" multiple>
                      </div><br>
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
