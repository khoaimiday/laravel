@extends('admin.Adminlayout')
@section('title', 'Receipt')
@section('content')
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                       <h3 class="card-title">Hoá đơn đơn hàng {{$order->id }}</h3>
                     </div>
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Khách hàng: </label> {{$order->order_name}}
                            </div>
                            <div class="form-group">
                                <label>Ngày đặt hàng: </label> {{$order->created_at}}
                            </div>
                            <div class="form-group">
                                <label>Trạng thái: </label> Đã giao hàng 
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại: </label> {{$order->order_phone}}
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ khách hàng: </label> {{$order->order_address}}
                            </div>
                            <div class="form-group">
                                <label>Ghi chú của đơn hàng: </label>{{$order->order_note}}
                            </div>
                        </div>
                        <div class="row px-4">
                            <h3 class="pl-5">Thông tin đơn hàng</h3>
                            <div class="col-lg-12 px-2">
                              <table class="table table-bordered pl-2 pr-1">
                                <thead>
                                    <tr>
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderDetails as $orderDetail)
                                    <tr>
                                        <td>{{$orderDetail->product_id}}</td>
                                        <td>{{$orderDetail->product_name}}</td>
                                        <td>{{$orderDetail->quantity}}</td>
                                        <td class="text-price"><strong>{{number_format($orderDetail->price) }} đ</strong></td>
                                     </tr>
                                    @endforeach
                                    <tr>
                                        <td class="text-right" colspan="3"><strong>Tổng tiền: </strong></td>
                                        <td class="text-price"><strong style="color:red">{{number_format($order->totalPrice)}} đ</strong></td>
                                    </tr>
                                </tbody>
                              </table>
                            </div>
                        </div> 
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{ route('admin-order')}}" class="btn btn-primary">Quay lại</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
