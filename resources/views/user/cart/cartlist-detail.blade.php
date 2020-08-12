@if(Session::has("Cart") !=null)
<div class="cart-table">
    <table>
        <thead>
            <tr>
                <th></th>
                <th class="p-name">Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Tạm tính</th>
                <th>Xoá</th>
            </tr>
        </thead>
        <tbody>   
            @foreach(Session::get("Cart")->products as $item)
            <tr>
                <td class="cart-pic first-row">
                    <img src="{{ url('img/feature/product/'.$item['productInfo']->image)}}" alt="">
                </td>
                <td class="cart-title first-row">
                    <h5>{{($item['productInfo']->product_name)}}</h5>
                </td>
                <td class="p-price first-row">{{number_format($item['productInfo']->price)}}Đ</td>
                <td class="qua-col first-row">
                    <div class="quantity">
                        <div class="pro-qty">
                            <span class="dec qtybtn" onclick="minusItem({{$item['productInfo']->id}})">-</span>
                            <input type="text" data-id="{{$item['productInfo']->id}}" id="updateItem-{{$item['productInfo']->id}}" value="{{$item['quantity']}}">
                            <span class="inc qtybtn" onclick="plusItem({{$item['productInfo']->id}})">+</span>
                        </div>
                    </div>
                </td>
                <td class="total-price first-row">{{number_format($item['price']) }}Đ</td>
                <td class="close-td first-row"><i class="ti-close" onclick="DeleteListItemCart({{$item['productInfo']->id}});">x</i></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-lg-4 offset-lg-8">
        <div class="proceed-checkout">
            <ul>
                <li class="subtotal">Tạm tính <span>{{number_format(Session::get('Cart') ->totalPrice)}}Đ</span></li>
                <li class="discounttotal">Chiết khấu (Nếu có) <span></span></li>
                <li class="cart-total">Tổng cộng <span>{{number_format(Session::get('Cart') ->totalPrice)}}Đ</span></li>
            </ul>
            <a href="{{ route('checkOrderLogin')}}" class="proceed-btn">Thanh toán</a>
            <div class="row">
                <div class="col-lg-6">
                    <a href="" class="deleteCart">Huỷ Giỏ hàng</a>
                </div>
                <div class="col-sm-6">
                    <a href="{{ url('/product') }}" class="buymore">Mua thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<script>
</script>
