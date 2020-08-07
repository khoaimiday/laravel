<div class="cart-table">
    <table>
        <thead>
            <tr>
                <th></th>
                <th class="p-name">Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Tạm tính</th>
                <th>Lưu lại</th>
                <th>Xoá</th>
            </tr>
        </thead>
        <tbody>
            @if(Session::has("Cart") !=null)
            @foreach(Session::get("Cart")->products as $item)
            <tr>
                <td class="cart-pic first-row"><img src="{{ url('img/feature/product/'.$item['productInfo']->image)}}" alt=""></td>
                <td class="cart-title first-row">
                    <h5>{{($item['productInfo']->product_name)}}</h5>
                </td>
                <td class="p-price first-row">{{number_format($item['productInfo']->price)}}Đ</td>
                <td class="qua-col first-row">
                    <div class="quantity">
                        <div class="pro-qty">
                            <span class="dec qtybtn">-</span>
                            <input type="text" value="{{$item['quantity']}}">
                            <span class="inc qtybtn">+</span>
                        </div>
                    </div>
                </td>
                <td class="total-price first-row">{{number_format($item['price'])}}Đ</td>
                <td class="close-td first-row"><i class="ti-save"></i></td>
                <td class="close-td first-row"><i class="ti-close"></i></td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-lg-4 offset-lg-8">
        <div class="proceed-checkout">
            <ul>
                <li class="subtotal">Tạm tính <span>{{number_format(Session::get('Cart') ->totalPrice)}}Đ</span></li>
                <li class="subtotal">Giảm giá(nếu có) <span>{{number_format(Session::get('Cart') ->totalPrice)}}Đ</span></li>
                <li class="cart-total">Tổng cộng <span>{{number_format(Session::get('Cart') ->totalPrice)}}Đ</span></li>
            </ul>
            <a href="#" class="proceed-btn">Thanh toán</a>
        </div>
    </div>
</div>