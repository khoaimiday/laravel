<!-- 
{{-- <div class="card">
    <img src="{{ asset('img/'.$image) }}" alt="Denim Jeans" style="width:100%">
    <div class="card-body">
        <h5 class="card-title">{{ $name }}</h5>
    <p class="price">{{ number_format($price) }}</p>
    <p>{{$description}}</p>
    <p><a href="url('/AddCart/$id')"><button>Add to Cart</button></a></p>
    </div>
</div> --}} -->

    <div class="card__product">
            <div class="box__img">
                <a href=""><img src="https://image.pharmacity.vn/live/uploads/2020/02/P16935_1-1-600x600.jpg" alt="Product IMG" style="width:100%"/></a>
            </div>
            <div class="box__text">
                <div class="title__wraper">
                    <div class="categories">
                        <h5 class="card-title">{{ $product_type }}</h5>
                    </div>
                    <div class="product__title" style="height: 73px">
                        <a>{{ $name }}</a>
                    </div>
                </div>
                <br>
                <div class="price__wraper" style="height: 34px">
                    <span class="price">
                        <span class="woocommerce-Price-amount amount"> {{ number_format($price) }}
                            <span class="woocommerce-Price-currencySymbol"> VND</span>
                        </span>
                        <span class="uom">/Hộp</span>
                    </span>
                </div>
                <div class="add__cart" style="height: 0px">
                    <a onclick="AddCart({{$id}})" href="javascript:" rel="nofollow" data-product_id="16190"
                     class="btn btn-outline-primary btn-sm button is-outline">Thêm vào giỏ</a>
                     <a href="{{ url('/user/product/productDetail/'.$id)}}" rel="nofollow" data-product_id="16190"
                     class="btn btn-success btn-sm button is-outline">Chi tiết</a>
                </div>
            </div>
    </div>
<script>
    function AddCart(id){
        $.ajax({
            url: '/AddCart/'+id,
            type: 'GET',
        }).done(function(response){
            console.log(response);
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            alertify.confirm("Đã thêm vào Giỏ hàng!", function(){
                alertify.success('OK');
            });
        });
    }

</script>

