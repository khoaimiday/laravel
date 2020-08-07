   <div class="card__product">
            <div class="box__img">
                <a href=""><img src="{{ url('img/feature/product/'.$image) }}" alt="Product IMG" style="width:100%"/></a>
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
                     <a href="{{ url('product/detail/'.$id)}}" rel="nofollow" data-product_id="16190"
                     class="btn btn-success btn-sm button is-outline">Chi tiết</a>
                </div>
            </div>
    </div>


