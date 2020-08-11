@extends('admin.Adminlayout')
@section('title', 'CommentIndex')
@section('content')
<style>
    .actionButton{
        text-decoration:none;
        font-size:15px;
        color:#000;
        opacity:1;
        display:block;
        padding:6px 15px;
        margin:7px;
        max-width:auto;
        text-align:center;
        border-radius:3px;
        border:1px solid #ddd;
        box-shadow: 0px 6px 8px 0px rgba(0,0,0,0.2);
        cursor: pointer;
    }
</style>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trang Admin - Comment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active"> <a href="{{ route('deleted-cmt') }}">Bình luận đã xoá</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách Bình luận mới</h3>
                    </div>
                    @if (session()->get('tempDel_success'))
                    <div class="alert alert-info ml-3 mr-5">{{session()->get('tempDel_success')}}</div>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tài khoản</th>
                                <th>Sản phẩm</th>
                                <th>Ngày bình luận</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Trả lời</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cmts as $cmt)
                            <tr>
                                <td>{{ $cmt->id }}</td>
                                <td>{{ $cmt->user_id}}</td>
                                <td>{{ $cmt->product_id}}</td>
                                <td>{{ $cmt->created_at }}</td>
                                <td>{{ $cmt->title }}</td>
                                <td>{{ $cmt->content }}</td>
                                <td>{{ $cmt->reply }}</td>
                                <td class="text-right">
                                    <a class="actionButton" href="{{ route('reply-cmt',$cmt->id)}}">Trả lời</a>
                                    <a class="actionButton" href="{{ route('tempDel-cmt',$cmt->id) }}">Xoá</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('script-section')
    <script>
        $(function () {
            $('#product').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
