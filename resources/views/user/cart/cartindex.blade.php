
    @if(Session::has("Cart") !=null)
        <div class="select-items">
            <table>
                <tbody>
                    @foreach(Session::get('Cart')->products as $item) 
                    <tr>
                        <td class="si-pic"><img src="{{ url('img/feature/product/'.$item['productInfo']->image) }}" alt=""></td>
                        <td class="si-text">
                            <div class="product-selected">
                                <h6>{{($item['productInfo']->product_name)}}</h6>
                                <p>{{number_format($item['productInfo']->price)}}Đ x {{$item['quantity']}}</p>                             
                            </div>
                        </td>
                        <td class="si-close">
                            <i class="ti-close" data-id="{{$item['productInfo']->id}}">x</i>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="select-total">
            <span>Tổng cộng:</span>
            <h5>{{number_format(Session::get('Cart') ->totalPrice)}}Đ</h5>
            <input hidden id="total-quantity-cart" type="number" value="{{ Session::get('Cart')->totalQuantity}}">
        </div>
    @endif
    