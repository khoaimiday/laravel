@extends('admin.Adminlayout')
@section('title', 'Brand Page')
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
                        <h3 class="card-title">Danh Sách Nhà Cung Cấp</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên Thương Hiệu</th>
                                <th>Email</th>
                                <th>Mô tả</th>
                                <th>Logo</th>
                                <th>Ngày tạo</th>
                                <th>Chỉnh sửa</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brandGlobal as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td>{{ $brand->brand_email }}</td>
                                <td><p class="content">{{ $brand->description }}</p></td>
                                <td><img width="50px" src="{{ url('img/feature/brand/'.$brand->brand_logo) }}" alt="IMG CATEGORIES"/></td>
                                <td>{{ $brand->created_at }}</td>
                                <td>{{ $brand->updated_at  }}</td>
                                <td>
                                    <a class="btn btn-info btn-sm-1"  href="{{ url('/admin/brand/update/'.$brand->id) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm-1"  href="{{ url('/admin/brand/delete/'.$brand->id) }}">
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
