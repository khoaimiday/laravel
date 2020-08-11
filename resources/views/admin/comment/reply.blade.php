@extends('admin.Adminlayout')
@section('title', 'Reply')
@section('content')
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                       <h3 class="card-title">Trả lời bình luận {{$cmt->id }}</h3>
                     </div>
                    <!-- /.card-header -->
                   <!-- form start -->
                   <form role="form" action="{{url('/admin/comment/postReply/'.$cmt->id) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Id</label>
                                <input type="text" class="form-control" id="id" name="id" value="{{ $cmt->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">User-Id</label>
                                <input type="text" class="form-control" id="user" name="user"  value="{{ $cmt->user_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Sản phẩm</label>
                                <input type="text" class="form-control" id="product" name="product"  value="{{ $cmt->product_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Ngày bình luận</label>
                                <input class="form-control" name="created_at" placeholder="" value="{{$cmt->created_at}}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <input class="form-control" name="content" placeholder="" value="{{$cmt->content}}" readonly>
                            </div>     
                            <div class="form-group">
                                <label>Trả lời</label>
                                <textarea class="form-control" rows="3" name="reply" placeholder=""> {{$cmt->reply}}</textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Đồng ý</button>
                            <a href="{{ route('admin-cmt')}}" class="btn btn-primary">Huỷ bỏ</a>
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
