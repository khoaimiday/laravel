@extends('admin.Adminlayout')
@section('title', 'OrderUpdate')
@section('content')
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                       <h3 class="card-title">Sửa đơn hàng {{$order->id }}</h3>
                     </div>
                    <!-- /.card-header -->
                   <!-- form start -->
                   <form role="form" action="{{url('/admin/order/postUpdate/'.$order->id) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field() }}
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
                                <select name="order_confirm" id="confirm">
                                    @if ($order->order_confirm == 1)
                                        <option value="1">Đã xác nhận</option>
                                        <option value="0">Chưa xác nhận</option>
                                    @else
                                        <option value="0">Chưa xác nhận</option>
                                        <option value="1">Đã xác nhận</option>
                                    @endif                        
                                </select>
                                <label>Giao hàng</label>
                                <select name="order_delivery" id="delivery">
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
                                <input class="form-control" name="totalPrice" placeholder="" value="{{$order->totalPrice}}" readonly>
                            </div>     
                            <div class="form-group">
                                <label>Tên khách hàng</label>
                                <input class="form-control" name="order_name" placeholder="" value="{{$order->order_name}}" />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại </label>
                                <input class="form-control" name="order_phone" placeholder="" value="{{$order->order_phone}}" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ khách hàng</label>
                                <input class="form-control" name="order_address" placeholder="" value="{{$order->order_address}}" />
                            </div>
                            <div class="form-group">
                                <label>Ghi chú của đơn hàng</label>
                                <textarea class="form-control" rows="3" name="order_note" placeholder=""> {{$order->order_note}}</textarea>
                        </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
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
@section('script-section')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
