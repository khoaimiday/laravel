
    @if($newCart != null)
        <div class="select-items">
            <table>
                <tbody>
                    @foreach($newCart->products as $item) 
                    <tr>
                        <td class="si-pic"><img src="" alt=""></td>
                        <td class="si-text">
                            <div class="product-selected">
                                <p>{{number_format($item['productInfo']->price)}}Đ x {{$item['quantity']}}</p>
                                <h6>{{($item['productInfo']->product_name)}}</h6>
                            </div>
                        </td>
                        <td class="si-close">
                            <i class="ti-close"></i>
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
    