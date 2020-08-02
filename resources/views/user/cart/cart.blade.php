
    @if($newCart != null)
        <div class="select-items">
            <table>
                <tbody>
                    @foreach($newCart->products as $item) 
                    <tr>
                        <td class="si-pic"><img src="{{ url('image/product/'.$item['productInfo']->image) }}" alt=""></td>
                        <td class="si-text">
                            <div class="product-selected">
                                <h6>{{($item['productInfo']->product_name)}}</h6>
                                <p>{{number_format($item['productInfo']->price)}}Đ x {{$item['quantity']}}</p>                             
                            </div>
                        </td>
                        <td class="si-close">
                            <i class="ti-close">X</i>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="select-total">
            <span>total:</span>
            <h5>{{number_format($newCart->totalPrice)}}Đ</h5>
        </div>
    @endif
    