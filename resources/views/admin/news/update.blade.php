@extends('admin.Adminlayout')
@section('title', 'newsUpdate')
@section('content')
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                       <h3 class="card-title">Update {{$new->name }}</h3>
                     </div>
                    <!-- /.card-header -->
                   <!-- form start -->
                   <form role="form" action="{{url('/admin/news/postUpdate/'.$new->id) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Id</label>
                                <input type="text" class="form-control" id="id" name="id" value="{{ $new->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Tiêu đề</label>
                                <pre><input type="text" class="form-control" id="title" name="name"  value="{{ $new->title }}"></pre>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <pre><textarea class="form-control" rows="10" name="content" placeholder="Enter ...">{{ $new->content }}</textarea></pre>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Chủ đề</label>
                                <input type="text" class="form-control" id="topic" name="topic" value="{{ $new->topic }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img class="img-fluid" src="{{ url('images/news/'.$new->image) }}"/>
                                <div class="input-group">
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Chọn hình</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
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
