@extends('admin.Adminlayout')
@section('title', 'OrderComplete')
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
                    <h1>Trang Admin - Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active"> <a href="{{ route('admin-order') }}">Đơn hàng mới</a></li>
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
                        <h3 class="card-title">Danh sách đơn hàng đã hoàn thành</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                       @if (session()->get('delete_success'))
                        <div class="alert alert-info ml-3 mr-5">{{session()->get('delete_success')}}</div>
                       @endif
                       @if (session()->get('undo_success'))
                        <div class="alert alert-info ml-3 mr-5">{{session()->get('undo_success')}}</div>
                       @endif
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Khách hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Trạng thái</th>
                                <th>Tổng tiền</th>
                                <th>Chỉnh sửa</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                              <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user_id}}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->order_delivery == 1 ? 'Đã hoàn thành' : 'Đã huỷ' }}</></td>
                                <td>{{ $order->totalPrice }}</td>
                                <td class="text-right">
                                    <a href="{{ route('detail-order',$order->id)}}" class="actionButton">Chi tiết</a>
                                    @if ($order->order_delivery == 2)
                                    <a class="actionButton" href="{{ route('undo-order',$order->id) }}">Hoàn tác</a>
                                    <a class="actionButton" href="{{ route('delete-order',$order->id) }}">Xoá</a>
                                    @endif
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
