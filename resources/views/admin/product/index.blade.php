@extends('admin.Adminlayout')
@section('title', 'Product Page')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trang Admin</h1>
                </div>
                <div class="col-sm-6" style="justify-content: flex-end;">
                    {{ Breadcrumbs::render('productAdm') }}
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
                                <th>Active</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Giá Bán</th>
                                <th>Hình ảnh</th>
                                <th>Đã Bán</th>
                                <th>Ngày Cập Nhật</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><input type="checkbox" {{isset($product->deleted_at)? '' : 'checked'}}></td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->short_description }}</td>
                                <td>{{ $product->price }}</td>
                                <td><img width="50px" src="{{ url('img/feature/product/'.$product->image) }}" alt="IMG PRODUCT"/></td>
                                <td>{{ $product->sold_out}}</td>
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
    <style>
        .breadcrumb{
            justify-content: flex-end;
        }
    </style>
@endsection
