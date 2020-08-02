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
                      <div class="row">
                        <div class="col-12 form-group">
                            <label class="form-control-label text-uppercase">PRODUCT TITLE <span class="required">*</span></label>
                            <input type="text" class="form-control" name="prodName">
                            @if($errors->has('prodName'))
                               <small style="color:red;font-size:14px;">{{$errors->first('prodName')}}</small>
                            @endif
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label text-uppercase">CATEGORY <span class="required">*</span></label>
                                  <select name="prodCate" class="form-control">
                                     @foreach ($c as $c)
                                        <option value="{{$c->id}}"> {{$c->type_name}}</option>
                                     @endforeach
                                  </select>
                                  @if($errors->has('prodCate'))
                                   <small style="color:red;font-size:14px;">{{$errors->first('prodCate')}}</small>
                                  @endif
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label text-uppercase">Brands <span class="required">*</span></label>
                                  <select name="prodBrand" class="form-control">
                                    @foreach ($b as $b)
                                        <option value="{{$b->id}}" > {{$b->brand_name}} </option>
                                     @endforeach
                                  </select>
                                  @if($errors->has('prodBrand'))
                                   <small style="color:red;font-size:14px;">{{$errors->first('prodBrand')}}</small>
                                  @endif
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label text-uppercase">price</label>
                                <input type="text" class="form-control" name="prodPrice" />
                                @if($errors->has('prodPrice'))
                                    <small style="color:red;font-size:14px;">{{$errors->first('prodPrice')}}</small>
                                @endif
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label text-uppercase">Unit</label>
                                <select name="prodUnit" class="form-control">
                                    <option value="">Hộp</option>
                                    <option value="">Chai</option>
                                    <option value="">Lốc</option>
                                    <option value="">Thùng</option>
                                    <option value="">Tuýp</option>
                                    <option value="">Vỉ</option>
                                    <option value="">Viên</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label text-uppercase">Warranty_Period <span class="required">*</span></label>
                                <input type="number" class="form-control" name="prodWarranty" min="0">
                                @if($errors->has('prodWarranty'))
                                   <small style="color:red;font-size:14px;">{{$errors->first('prodWarranty')}}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-8 form-group">
                            <label class="form-control-label text-uppercase">Short Description <span class="required">*</span></label>
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" name="shortDesc"rows="3"></textarea>
                            @if($errors->has('shortDesc'))
                               <small style="color:red;font-size:14px;">{{$errors->first('shortDesc')}}</small>
                            @endif
                        </div>
                     </div>
                      <div class="row">
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
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Upload Feature Image: <span class="required">*</span></label><br>
                        <input type="file" class="custom-fileip" name="prodImg"><br>
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
