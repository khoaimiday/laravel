@extends('admin.Adminlayout')
@section('title', 'OrderDetail')
@section('content')
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                       <h3 class="card-title">Chi tiết đơn hàng {{$order->id }}</h3>
                     </div>
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Id</label>
                                <input type="text" class="form-control" id="id" name="id" value="{{ $order->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Khách hàng</label>
                                <pre><input type="text" class="form-control" id="title" name="title"  value="{{ $order->user_id }}" readonly></pre>
                            </div>
                            <div class="form-group">
                                <label>Ngày đặt hàng</label>
                                <input class="form-control" name="created_at" placeholder="" value="{{$order->created_at}}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Xác nhận</label>
                                <select name="order_confirm" id="confirm" disabled>
                                    @if ($order->order_confirm == 1)
                                        <option value="1">Đã xác nhận</option>
                                        <option value="0">Chưa xác nhận</option>
                                    @else
                                        <option value="0">Chưa xác nhận</option>
                                        <option value="1">Đã xác nhận</option>
                                    @endif                        
                                </select>
                                <label>Giao hàng</label>
                                <select name="order_delivery" id="delivery" disabled>
                                    @if ($order->order_delivery == 1)
                                        <option value="1">Đã giao hàng</option>
                                        <option value="0">Chưa giao hàng</option>
                                    @else
                                        <option value="0">Chưa giao hàng</option>
                                        <option value="1">Đã giao hàng</option>
                                    @endif                                   
                                </select>    
                            </div>
                            <div class="form-group">
                                <label>Tổng tiền</label>
                                <input  class="form-control" name="totalPrice" placeholder="" value="{{$order->$totalPrice}}" readonly>
                            </div>     
                            <div class="form-group">
                                <label>Tên khách hàng</label>
                                <input class="form-control" name="order_name" placeholder="" value="{{$order->order_name}}" readonly />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại </label>
                                <input readonly class="form-control" name="order_phone" placeholder="" value="{{$order->order_phone}}" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ khách hàng</label>
                                <input readonly class="form-control" name="order_address" placeholder="" value="{{$order->order_address}}" />
                            </div>
                            <div class="form-group">
                                <label>Ghi chú của đơn hàng</label>
                                <textarea class="form-control" rows="3" name="order_note" placeholder="" readonly> {{$order->order_note}}</textarea>
                            </div>
                        </div>
                        <div class="row pb-5">
                            <h4>Thông tin đơn hàng</h4>
                            <div class="col-lg-10">
                              <table class="table table-bordered">
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
                                        <td class="text-right" colspan="4"><strong>Tổng tiền: </strong></td>
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
