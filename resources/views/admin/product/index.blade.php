@extends('admin.Adminlayout')
@section('title', 'Product Page')
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
                        <h3 class="card-title">Danh Sách Sản Phẩm</h3>
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
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td><p class="content">{{ $product->short_description }}</p></td>
                                <td>{{ $product->price }}</td>
                                <td><img width="50px" src="{{ url('img/feature/'.$product->image) }}" alt="IMG PRODUCT"/></td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at  }}</td>
                                <td class="text-right">
                                <a class="btn btn-primary btn-sm-1"  href="{{ url('/admin/product/detail/'.$product->id) }}">
                                        <i class="fas fa-folder"></i>
                                    </a>
                                    <a class="btn btn-info btn-sm-1"  href="{{ url('/admin/product/update/'.$product->id) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm-1"  href="{{ url('/admin/product/delete/'.$product->id) }}">
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
