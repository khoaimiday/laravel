<!doctype html>
<html lang="en">
  <head>
    <title>Xác nhận đơn hàng</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    * {
        box-sizing: border-box;
    }
    .cart-body {
      margin: 0px;
      padding:40px;
      background-image:url('/img/cart/bg1.jpg');
      background-size:cover;
    }
    .cart-card {
      margin:0px 40px;
      height:auto;
      border:solid 2px white;
      background-color:#ffffe6;
      padding:50px;
      box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);
    }


    </style>

  </head>
  <body>
  @include('fragments.topheader')

  <div class="cart-body">
  <div class="cart-card">
        <div class="container bg-white pb-3 mt-5 pl-5 pr-5 mb-5">
           <div class="row">
               <div class="col-12">
                   <div class="row">
                        <div class="col-3">
                            <img src="{{url('img/footer/logo-company.png')}}" width="100%" alt="logo" class="d-none d-md-inline-block">
                        </div>
                        <div class="col-9" style="padding-top:40px">
                            <p>Công ty cổ phần dược phẩm, thực phẩm chức năng Cucumber</p>
                            <p>Địa chỉ: 10x01 Cách Mạng Tháng 8, phường 5, quận 10, Tp.HCM</p>
                            <p>Số 20x02 Trường Chinh, phường Khương Thượng, quận Đống Đa, Tp.Hà Nội</p>
                            <p>Điện thoại: (84 28) 66667777 - 88889999 - Email:cskh@cucumber.com.vn</p>
                        </div>
                   </div>
               </div>
           </div>
           <div class="row ">
               <div class="text-center m-auto">
                   <h2>Xác nhận đơn hàng</h2>
                   <div>Mã đơn hàng:{{$order->id}}</div>
                </div>
           </div>
           <div class="row mt-5">
               <div class="col-6 user-information">
                    <p class="text-uppercase">
                        <strong>Khách hàng: </strong>
                    </p>
                    <div>Họ tên: {{$order->order_name}}</div>
                    <div>Điện thoại: {{$order->order_phone}}</div>
                    <div>Địa chỉ: {{$order->order_address}}</div>
                    <div>Ghi chú: {{$order->order_note}}</div>
               </div>
               <div class="col-6 order-information">
                    <p class="text-uppercase">
                        <strong>Thông tin đơn hàng: </strong>
                    </p>
                    <div>Mã đặt hàng: {{$order->id}}</div>
                    <div>Ngày đặt hàng: {{$order->created_at}}</div>
                    <div>Trạng thái: Đang xử lý</div>
                </div>
           </div>

           <div class="row mt-4">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền(VNĐ)</th>
                  </tr>
                </thead>
                <tbody>
                @foreach {{$orderDetail as orderDetail}}
                    <tr>
                      <td>1</td>
                      <td>{{$orderDetail->id}}</td>
                      <td>{{$orderDetail->name}}</td>
                      <td>{{$orderDetail->quantity}}</td>
                      <td class="text-price"><strong>{{number_format($orderDetail->price)}}</strong></td>
                    </tr>
                      <tr>
                        <td class="text-right" colspan="5"><strong>Áp dụng giảm giá (nếu có): </strong></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="text-right" colspan="5"><strong>Tổng tiền phải trả: </strong></td>
                          <td class="text-price"><strong>{{number_format($order->totalPrice)}}</strong></td>
                      </tr>
                @endforeach
                </tbody>
              </table>
           </div>

           <div class="row mt-3">
               <div class="alert alert-danger m-auto">
                    <h5 class="text-center">Khách hàng vui lòng thanh toán khi nhận hàng!</h5>
                    <h5 class="text-center">Đơn hàng sẽ được giao trong ngày đối với đơn ở Hà Nội và TPHCM, từ 2-5 ngày đối với các tỉnh khác!</h5>
               </div>
           </div>
        </div>
  </div>
  </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @include('fragments.footer3')
</body>
</html>