@extends('admin.Adminlayout')
@section('title', 'Create News')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tạo Tin mới</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('/admin/news/postCreate') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                            @if(Session::has('flash_message'))
                                <div class="alert alert-{!! Session::get('flash_message') !!}">
                                    {!!Session::get('flash_message')!!}
                                </div>
                            @endif
                                <div class="form-group">
                                    <label for="txt-id">Id</label>
                                    <input type="text" class="form-control" id="id" value="{{old('id')}}" name="id" placeholder="1">
                                    @if ($errors->has('id'))
                                        <p class="alert alert-default" style="width:fit-content;opacity:0.6;color:red">{{ $errors->first('id') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Tiêu đề</label>
                                    <input type="text" class="form-control mb-3" id="title" name="title" value="{{old('title')}}" placeholder="Tên tiêu đề">
                                    @if ($errors->has('title'))
                                    <p class="alert alert-default" style="width:fit-content;opacity:0.6;color:red">{{ $errors->first('title')}}</p>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <label>Nội dung</label>
                                   <pre style="white-space:normal"><input class="form-control" rows="10" name="content" value="{{old('content')}}"  id="content" placeholder="..."></input></pre> 
                                    <!-- <textarea class="form-control ckeditor" rows="10" name="content" value="{{old('content')}}" id="content" placeholder="..."></textarea> -->
                                    @if ($errors->has('content'))
                                    <p class="alert alert-default" style="width:fit-content;opacity:0.6;color:red">{{ $errors->first('content') }}</p>
                                    @endif
                                    <script>
                                        CKEDITOR.replace( 'content', {
                                            language: 'en',
                                            uiColor: '#9AB8F3'
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Chủ đề</label>
                                    <input type="text" class="form-control" id="topic" name="topic" value="{{old('topic')}}" placeholder="Chủ đề (nếu có)">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" value="{{old('image')}}" name="image">
                                            <label class="custom-file-label" for="image">Chọn hình</label>

                                        </div>
                                    </div>
                                    @if ($errors->has('image'))
                                    <p class="alert alert-default" style="width:fit-content;opacity:0.6;color:red">{{ $errors->first('image') }}</p>
                                            @endif
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Tải lên</button>
                                <a href="{{ route('admin-news')}}" class="btn btn-primary">Quay lại</a>
                            </div>
                        
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script-section')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
