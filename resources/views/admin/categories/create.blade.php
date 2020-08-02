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
                    <form role="form" action="{{url("admin/categories/postCreate")}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="row">
                        <div class="col-12 form-group">
                            <label class="form-control-label text-uppercase">CATEGORIES NAME<span class="required">*</span></label>
                            <input type="text" class="form-control" name="cateName">
                            @if($errors->has('cateName'))
                               <small style="color:red;font-size:14px;">{{$errors->first('cateName')}}</small>
                            @endif
                          </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-12">
                            <label class="form-control-label text-uppercase">DESCRIPTION<span class="required">*</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="cateDesc" rows="3"></textarea>
                            @if($errors->has('cateDesc'))
                               <small style="color:red;font-size:14px;">{{$errors->first('cateDesc')}}</small>
                            @endif
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Upload Feature Image: <span class="required">*</span></label><br>
                        <input type="file" class="custom-fileip" name="cateImg"><br>
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
