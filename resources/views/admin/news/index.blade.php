@extends('admin.Adminlayout')
@section('title', 'NewsIndex')
@section('content')
<style>
    p.content{
      white-space: nowrap;
      word-wrap: break-word;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 400px;
    }
</style>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trang Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active"> <a href="{{ url('admin/news/create') }}">Tạo mới</a></li>
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
                        <h3 class="card-title">Danh sách tin tức trên Blog sức khoẻ</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Chủ đề</th>
                                <th>Hình ảnh</th>
                                <th>Ngày tạo</th>
                                <th>Chỉnh sửa</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $new)
                            <tr>
                                <td>{{ $new->id }}</td>
                                <td>{{ $new->title }}</td>
                                <td><p class="content">{{ $new->content }}</p></td>
                                <td>{{ $new->topic }}</td>
                                <td><img width="100px" src="{{ url('images/news'.$new->image) }}"/></td>
                                <td>{{ $new->created_at }}</td>
                                <td>{{ $new->updated_at  }}</td>
                                <td class="text-right">
                                    <a class="btn btn-primary btn-sm-1" style="width:80px;" href="#">
                                        <i class="fas fa-folder"></i> Xem
                                    </a>
                                    <a class="btn btn-info btn-sm-1" style="width:80px;" href="{{ url('/admin/news/update/'.$new->id) }}">
                                        <i class="fas fa-pencil-alt"></i> Sửa
                                    </a>
                                    <a class="btn btn-danger btn-sm-1" style="width:80px;" href="{{ url('/admin/news/delete/'.$new->id) }}">
                                        <i class="fas fa-trash"></i> Xoá
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Chủ đề</th>
                                <th>Hình ảnh</th>
                                <th>Ngày tạo</th>
                                <th>Chỉnh sửa</th>
                                <th></th>
                            </tr>
                            </tfoot>
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
