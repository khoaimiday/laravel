@extends('admin.Adminlayout')
@section('title', 'Create Categories - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row" style="justify-content: center;">
          <div class="col-lg-8 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Thêm Loại Sản Phẩm</h6>
              </div>
              <div class="card-body">
                    @if(Session::has('flash_message'))
                      <div class="alert alert-{!! Session::get('flash_level') !!}">
                          {!!Session::get('flash_message')!!}
                      </div>
                    @endif
                    {{-- @include('admin.product.form-error') --}}
                    <form role="form" action="{{url("admin/brand/postCreate")}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="row">
                        <div class="col-12 form-group">
                            <label class="form-control-label text-uppercase">BRAND NAME<span class="required">*</span></label>
                            <input type="text" class="form-control" name="brandName">
                            @if($errors->has('brandName'))
                               <small style="color:red;font-size:14px;">{{$errors->first('brandName')}}</small>
                            @endif
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-12 form-group">
                            <label class="form-control-label text-uppercase">BRAND EMAIL<span class="required">*</span></label>
                            <input type="text" class="form-control" name="brandEmail">
                            @if($errors->has('brandEmail'))
                               <small style="color:red;font-size:14px;">{{$errors->first('brandEmail')}}</small>
                            @endif
                          </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-12">
                            <label class="form-control-label text-uppercase">DESCRIPTION<span class="required">*</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="brandDesc" rows="3"></textarea>
                            @if($errors->has('brandDesc'))
                               <small style="color:red;font-size:14px;">{{$errors->first('brandDesc')}}</small>
                            @endif
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Upload Brand Logo: <span class="required">*</span></label><br>
                        <input type="file" class="custom-fileip" name="brandImg"><br>
                      </div>
                      <br>
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
