@extends('admin.Adminlayout')
@section('title', 'Categories Page')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trang Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active"> <a href="{{ url('admin/categories/create') }}">Tạo mới</a></li>
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
                        <h3 class="card-title">Danh Sách Loại Sản Phẩm</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Active</th>
                                <th>Tiêu đề</th>
                                <th>Mô Tả</th>
                                <th>Hình ảnh</th>
                                <th>Ngày tạo</th>
                                <th>Chỉnh sửa</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($productType as $cate)
                            <tr>
                                <td>{{ $cate->id }}</td>
                                <td><input type="checkbox" {{isset($cate->deleted_at)? '' : 'checked'}}></td>
                                <td>{{ $cate->type_name }}</td>
                                <td><p class="content">{{ $cate->description }}</p></td>
                                <td><img width="50px" src="{{ url('img/feature/'.$cate->type_image) }}" alt="IMG CATEGORIES"/></td>
                                <td>{{ $cate->created_at }}</td>
                                <td>{{ $cate->updated_at  }}</td>
                                <td>
                                    <a class="btn btn-info btn-sm-1"  href="{{ url('/admin/categories/update/'.$cate->id) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm-1"  href="{{ url('/admin/categories/delete/'.$cate->id) }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
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
