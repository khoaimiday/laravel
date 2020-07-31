
{{-- <div class="card">
    <img src="{{ asset('img/'.$image) }}" alt="Denim Jeans" style="width:100%">
    <div class="card-body">
        <h5 class="card-title">{{ $name }}</h5>
    <p class="price">{{ $price }}</p>
    <p>{{$description}}</p>
    <p><button>Add to Cart</button></p>
    </div>
</div> --}}

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
                <div class="price__wraper" style="height: 34px">
                    <span class="price">
                        <span class="woocommerce-Price-amount amount">{{ $price}}
                            <span class="woocommerce-Price-currencySymbol"> VND</span>
                        </span>
                        <span class="uom">/Hộp</span>
                    </span>
                </div>
                <div class="add__cart" style="height: 0px">
                    <a href="/san-pham/?add-to-cart=16190" rel="nofollow" data-product_id="16190"
                     class="btn btn-outline-primary btn-sm button is-outline">Thêm vào giỏ</a>
                     <a href="/san-pham/?add-to-cart=16190" rel="nofollow" data-product_id="16190"
                     class="btn btn-success btn-sm button is-outline">Mua ngay</a>
                </div>
            </div>
    </div>



