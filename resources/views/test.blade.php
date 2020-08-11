@extends('layouts.default')

@section('content')
<div class="product-footer">
    <div class="container">
        <div class="woocommerce-tabs container tabbed-content">
            <ul class="product-tabs small-nav-collapse tabs nav nav-uppercase nav-line nav-left">
                <li style="cursor: pointer" class="description_tab active" onclick="showTabDesc()"> <p>Mô tả</p></li>
                <li style="cursor: pointer" class="pwb_tab_tab mx-3" onclick="showTabPwd()"><p>Thương hiệu</p></li>
                <li style="cursor: pointer" class="reviews_tab" onclick="showTabReview()"> <p>Đánh giá (0)</p></li>
            </ul>
            <div class="tab-panels">
                <div class="panel entry-content active" id="tab-description">
                    {{-- <div>{!!$pro->long_description!!}</div> --}}
                </div>
                <div class="panel entry-content" id="tab-pwb_tab">
                    <h2>Thương hiệu</h2>
                </div>
                <div class="panel entry-content" id="tab-reviews">

                </div>
            </div>
        </div>

    </div>
</div>

        {{-- <div class="related related-products-wrapper product-section">
            <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                Sản phẩm liên quan</h3>
            <div class="row large-columns-4 medium-columns- small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push flickity-enabled is-draggable"
                data-flickity-options="{&quot;imagesLoaded&quot;: true, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 5, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: true,&quot;pageDots&quot;: false, &quot;rightToLeft&quot;: false, &quot;autoPlay&quot; : false}"
                tabindex="0">
                <div class="flickity-viewport" style="height: 414.422px; touch-action: pan-y;">
                    <div class="flickity-slider" style="left: 0px; transform: translateX(-400%);">
                        <div class="product-small col has-hover is-selected" aria-selected="true"
                            style="position: absolute; left: 400%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/nuoc-rua-tay-kho-huong-bamboo-charcoal-on1-250ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=1">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/07/P17784_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/07/P17784_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/07/P17784_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/07/P17784_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/07/P17784_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/07/P17784_1_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/07/P17784_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/07/P17784_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/07/P17784_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/07/P17784_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/07/P17784_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/07/P17784_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/07/P17784_2_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/07/P17784_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-255643">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=255643"
                                                                rel="nofollow" data-product-id="255643"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="255643"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/nuoc-rua-tay-kho-huong-bamboo-charcoal-on1-250ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=1">Nước
                                                    rửa tay khô hương bamboo charcoal On1 (250ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">40,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=255643"
                                                rel="nofollow" data-product_id="255643"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=255643"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover is-selected" aria-selected="true"
                            style="position: absolute; left: 425%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/gel-rua-tay-kho-huong-lotus-rice-on1-60ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=2">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/07/P17783_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/07/P17783_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/07/P17783_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/07/P17783_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/07/P17783_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/07/P17783_1_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/07/P17783_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/07/P17783_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/07/P17783_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/07/P17783_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/07/P17783_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/07/P17783_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/07/P17783_2_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/07/P17783_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-255646">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=255646"
                                                                rel="nofollow" data-product-id="255646"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="255646"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/gel-rua-tay-kho-huong-lotus-rice-on1-60ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=2">Gel
                                                    rửa tay khô hương lotus rice On1 (60ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">28,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=255646"
                                                rel="nofollow" data-product_id="255646"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=255646"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover is-selected" aria-selected="true"
                            style="position: absolute; left: 450%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/nuoc-rua-tay-kho-huong-bamboo-charcoal-on1-500ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=3">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/07/P17785_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/07/P17785_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/07/P17785_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/07/P17785_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/07/P17785_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/07/P17785_1_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/07/P17785_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/07/P17785_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/07/P17785_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/07/P17785_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/07/P17785_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/07/P17785_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/07/P17785_2_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/07/P17785_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-255639">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=255639"
                                                                rel="nofollow" data-product-id="255639"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="255639"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/nuoc-rua-tay-kho-huong-bamboo-charcoal-on1-500ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=3">Nước
                                                    rửa tay khô hương bamboo charcoal On1 (500ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">55,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=255639"
                                                rel="nofollow" data-product_id="255639"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=255639"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover is-selected" aria-selected="true"
                            style="position: absolute; left: 475%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/gel-rua-tay-kho-huong-hoa-oai-huong-pharmacity-chai-90ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=4">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P10985_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P10985_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P10985_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P10985_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P10985_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P10985_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P10985_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P10985_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P10985_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P10985_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P10985_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P10985_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-14404">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=14404"
                                                                rel="nofollow" data-product-id="14404"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="14404"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/gel-rua-tay-kho-huong-hoa-oai-huong-pharmacity-chai-90ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=4">Gel
                                                    rửa tay khô Hương hoa oải hương Pharmacity (Chai 90ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">21,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=14404"
                                                rel="nofollow" data-product_id="14404"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=14404"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 100%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/xit-rua-tay-kho-huong-hoa-oai-huong-pharmacity-18ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=5">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/05/P17284_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/05/P17284_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/05/P17284_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/05/P17284_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/05/P17284_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/05/P17284_1_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/05/P17284_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/05/P17284_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/05/P17284_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/05/P17284_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/05/P17284_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/05/P17284_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/05/P17284_2_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/05/P17284_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-221466">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=221466"
                                                                rel="nofollow" data-product-id="221466"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="221466"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/xit-rua-tay-kho-huong-hoa-oai-huong-pharmacity-18ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=5">Xịt
                                                    rửa tay khô hương hoa oải hương Pharmacity (18ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">27,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=221466"
                                                rel="nofollow" data-product_id="221466"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=221466"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 125%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/gel-rua-tay-huong-hoa-oai-huong-pharmacity-320ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=6">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/05/P17283_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/05/P17283_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/05/P17283_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/05/P17283_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/05/P17283_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/05/P17283_1_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/05/P17283_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/05/P17283_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/05/P17283_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/05/P17283_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/05/P17283_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/05/P17283_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/05/P17283_2_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/05/P17283_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-221842">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=221842"
                                                                rel="nofollow" data-product-id="221842"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="221842"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/gel-rua-tay-huong-hoa-oai-huong-pharmacity-320ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=6">Gel
                                                    rửa tay hương hoa oải hương Pharmacity (320ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">52,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=221842"
                                                rel="nofollow" data-product_id="221842"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=221842"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 150%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/gel-rua-tay-kho-huong-tra-xanh-pharmacity-chai-90ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=7">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P10984_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P10984_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P10984_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P10984_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P10984_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P10984_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P10984_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P10984_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P10984_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P10984_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P10984_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P10984_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-14405">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=14405"
                                                                rel="nofollow" data-product-id="14405"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="14405"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/gel-rua-tay-kho-huong-tra-xanh-pharmacity-chai-90ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=7">Gel
                                                    rửa tay khô Hương trà xanh Pharmacity (Chai 90ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">21,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=14405"
                                                rel="nofollow" data-product_id="14405"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=14405"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 175%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/sua-tam-goi-thien-nhien-huong-hoa-anh-dao-purite-baby-250ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=8">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/03/P17296_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/03/P17296_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/03/P17296_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/03/P17296_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/03/P17296_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/03/P17296_1_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/03/P17296_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/03/P17296_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/03/P17296_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/03/P17296_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/03/P17296_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/03/P17296_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/03/P17296_2_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/03/P17296_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-172402">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=172402"
                                                                rel="nofollow" data-product-id="172402"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="172402"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/sua-tam-goi-thien-nhien-huong-hoa-anh-dao-purite-baby-250ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=8">Sữa
                                                    tắm gội thiên nhiên hương hoa anh đào Purite Baby (250ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">89,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=172402"
                                                rel="nofollow" data-product_id="172402"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=172402"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 200%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/gel-rua-tay-kho-bac-ha-bioskin-125ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=9">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/07/P17782_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/07/P17782_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/07/P17782_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/07/P17782_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/07/P17782_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/07/P17782_1_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/07/P17782_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2020/07/P17782_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2020/07/P17782_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2020/07/P17782_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2020/07/P17782_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2020/07/P17782_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2020/07/P17782_2_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2020/07/P17782_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-255649">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=255649"
                                                                rel="nofollow" data-product-id="255649"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="255649"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/gel-rua-tay-kho-bac-ha-bioskin-125ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=9">Gel
                                                    rửa tay khô bạc hà Bioskin (125ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">45,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=255649"
                                                rel="nofollow" data-product_id="255649"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=255649"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 225%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1">
                                    <div class="callout badge badge-circle">
                                        <div class="badge-inner secondary on-sale"><span class="onsale">-16%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/xit-khu-mui-duong-trang-huong-hoa-anh-dao-nivea-serum-sakura-150ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=10">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/12/P16682_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/12/P16682_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/12/P16682_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/12/P16682_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/12/P16682_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/12/P16682_1_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2019/12/P16682_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/12/P16682_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/12/P16682_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/12/P16682_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/12/P16682_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/12/P16682_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/12/P16682_2_l-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2019/12/P16682_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-118052">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=118052"
                                                                rel="nofollow" data-product-id="118052"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="118052"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/xit-khu-mui-duong-trang-huong-hoa-anh-dao-nivea-serum-sakura-150ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=10">Xịt
                                                    khử mùi dưỡng trắng hương hoa anh đào Nivea Serum Sakura (150ml)</a>
                                            </p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><del><span
                                                        class="woocommerce-Price-amount amount">113,000<span
                                                            class="woocommerce-Price-currencySymbol">
                                                            VND</span></span></del> <ins><span
                                                        class="woocommerce-Price-amount amount">95,000<span
                                                            class="woocommerce-Price-currencySymbol">
                                                            VND</span></span></ins><span class="uom">/Chai</span></span>
                                        </div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=118052"
                                                rel="nofollow" data-product_id="118052"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=118052"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 250%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/xit-rua-tay-kho-huong-tra-xanh-pharmacity-18ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=11">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P13021_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P13021_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P13021_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P13021_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P13021_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P13021_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P13021_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P13021_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P13021_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P13021_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P13021_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P13021_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-22122">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=22122"
                                                                rel="nofollow" data-product-id="22122"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="22122"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/xit-rua-tay-kho-huong-tra-xanh-pharmacity-18ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=11">Xịt
                                                    rửa tay khô hương trà xanh Pharmacity (18ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">27,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Hộp</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=22122"
                                                rel="nofollow" data-product_id="22122"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=22122"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 275%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/sua-tam-goi-toan-than-huong-hoa-anh-dao-cho-be-babi-mild-white-sakura-400ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=12">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P13409_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P13409_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P13409_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P13409_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P13409_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P13409_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P13409_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P13409_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P13409_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P13409_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P13409_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P13409_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-21897">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=21897"
                                                                rel="nofollow" data-product-id="21897"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="21897"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/sua-tam-goi-toan-than-huong-hoa-anh-dao-cho-be-babi-mild-white-sakura-400ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=12">Sữa
                                                    tắm gội toàn thân hương hoa anh đào cho bé Babi Mild White Sakura
                                                    (400ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">88,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=21897"
                                                rel="nofollow" data-product_id="21897"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=21897"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 300%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/sua-tam-goi-toan-than-huong-hoa-anh-dao-cho-be-babi-mild-white-sakura-200ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=13">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P13411_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P13411_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P13411_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P13411_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P13411_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P13411_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P13411_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P13411_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P13411_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P13411_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P13411_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P13411_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-21891">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=21891"
                                                                rel="nofollow" data-product-id="21891"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="21891"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/sua-tam-goi-toan-than-huong-hoa-anh-dao-cho-be-babi-mild-white-sakura-200ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=13">Sữa
                                                    tắm gội toàn thân hương hoa anh đào cho bé Babi Mild White Sakura
                                                    (200ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">54,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=21891"
                                                rel="nofollow" data-product_id="21891"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=21891"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 325%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/gel-rua-tay-huong-tra-xanh-pharmacity-320ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=14">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/05/P13020_1-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/05/P13020_1-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_1-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_1-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_1-768x768.jpg 768w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_1-800x800.jpg 800w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_1-600x600.jpg 600w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_1-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_1-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_1.jpg 1500w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/05/P13020_2-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/05/P13020_2-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_2-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_2-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_2-768x768.jpg 768w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_2-800x800.jpg 800w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_2-600x600.jpg 600w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_2-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_2-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2019/05/P13020_2.jpg 1500w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-22013">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=22013"
                                                                rel="nofollow" data-product-id="22013"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="22013"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/gel-rua-tay-huong-tra-xanh-pharmacity-320ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=14">Gel
                                                    rửa tay hương trà xanh Pharmacity (320ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">52,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=22013"
                                                rel="nofollow" data-product_id="22013"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=22013"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 350%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1"></div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/sua-duong-the-huong-hoa-anh-dao-nivea-200ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=15">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P10732_1_l-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P10732_1_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P10732_1_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P10732_1_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P10732_1_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P10732_1_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/04/P10732_2_l-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/04/P10732_2_l-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/04/P10732_2_l-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/04/P10732_2_l-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/04/P10732_2_l-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/04/P10732_2_l.jpg 460w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-14514">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=14514"
                                                                rel="nofollow" data-product-id="14514"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="14514"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/sua-duong-the-huong-hoa-anh-dao-nivea-200ml/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=15">Sữa
                                                    dưỡng thể hương hoa anh đào Nivea (200ml)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><span
                                                    class="woocommerce-Price-amount amount">64,000<span
                                                        class="woocommerce-Price-currencySymbol"> VND</span></span><span
                                                    class="uom">/Chai</span></span></div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=14514"
                                                rel="nofollow" data-product_id="14514"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=14514"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-small col has-hover" aria-selected="false"
                            style="position: absolute; left: 375%;">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1">
                                    <div class="callout badge badge-circle">
                                        <div class="badge-inner secondary on-sale"><span class="onsale">-15%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back"> <a
                                                href="https://www.pharmacity.vn/san-pham/dau-goi-tri-gau-huong-hoa-anh-dao-clear-370g/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=16">
                                                <img width="300" height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/05/P07858_1-1-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/05/P07858_1-1-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_1-1-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_1-1-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_1-1-768x768.jpg 768w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_1-1-800x800.jpg 800w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_1-1-600x600.jpg 600w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_1-1-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_1-1-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_1-1.jpg 820w"
                                                    sizes="(max-width: 300px) 100vw, 300px"><img width="300"
                                                    height="300"
                                                    src="https://image.pharmacity.vn/live/uploads/2019/05/P07858_2-1-300x300.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image" alt=""
                                                    srcset="https://image.pharmacity.vn/live/uploads/2019/05/P07858_2-1-300x300.jpg 300w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_2-1-280x280.jpg 280w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_2-1-400x400.jpg 400w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_2-1-768x768.jpg 768w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_2-1-800x800.jpg 800w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_2-1-600x600.jpg 600w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_2-1-100x100.jpg 100w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_2-1-32x32.jpg 32w, https://image.pharmacity.vn/live/uploads/2019/05/P07858_2-1.jpg 820w"
                                                    sizes="(max-width: 300px) 100vw, 300px"> </a></div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon"> <button
                                                    class="wishlist-button button is-outline circle icon"> <i
                                                        class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-15149">
                                                        <div class="yith-wcwl-add-button show" style="display:block"> <a
                                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add_to_wishlist=15149"
                                                                rel="nofollow" data-product-id="15149"
                                                                data-product-type="simple" class="add_to_wishlist"> Thêm
                                                                vào sản phẩm yêu thích</a> <img
                                                                src="https://www.pharmacity.vn/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif"
                                                                class="ajax-loading" alt="loading" width="16"
                                                                height="16" style="visibility:hidden"></div>
                                                        <div class="yith-wcwl-wishlistaddedbrowse hide"
                                                            style="display:none;"> <span class="feedback">Sản phẩm đã
                                                                thêm</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div class="yith-wcwl-wishlistexistsbrowse hide"
                                                            style="display:none"> <span class="feedback">Sản phẩm đã tồn
                                                                tại trong sản phẩm yêu thích</span> <a
                                                                href="https://www.pharmacity.vn/my-account/wishlist/?wishlist-action"
                                                                rel="nofollow"> Duyệt sản phẩm yêu thích </a></div>
                                                        <div style="clear:both"></div>
                                                        <div class="yith-wcwl-wishlistaddresponse"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a class="quick-view quick-view-added" data-prod="15149"
                                                href="#quick-view">Xem Nhanh</a></div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                Chăm sóc cá nhân</p>
                                            <p class="name product-title" style="height: 73px;"><a
                                                    href="https://www.pharmacity.vn/san-pham/dau-goi-tri-gau-huong-hoa-anh-dao-clear-370g/?itm_source=recommendation&amp;itm_medium=detailpage&amp;position=16">Dầu
                                                    gội trị gàu hương hoa anh đào Clear (370g)</a></p>
                                        </div>
                                        <div class="price-wrapper"> <span class="price"><del><span
                                                        class="woocommerce-Price-amount amount">98,000<span
                                                            class="woocommerce-Price-currencySymbol">
                                                            VND</span></span></del> <ins><span
                                                        class="woocommerce-Price-amount amount">83,300<span
                                                            class="woocommerce-Price-currencySymbol">
                                                            VND</span></span></ins><span class="uom">/Chai</span></span>
                                        </div>
                                        <div class="add-to-cart-button cham-soc-ca-nhan"><a
                                                href="/san-pham/gel-rua-tay-kho-huong-hoa-anh-dao-on1-fresh-sakura-250ml/?add-to-cart=15149"
                                                rel="nofollow" data-product_id="15149"
                                                class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Thêm
                                                vào giỏ</a><a href="https://www.pharmacity.vn/cart/?add-to-cart=15149"
                                                class="buy-now-shop add_to_cart_button product_type_simple button primary is-outline mb-0 is-small">Mua
                                                Ngay</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><button class="flickity-button flickity-prev-next-button previous" type="button"
                    aria-label="Previous"><svg class="flickity-button-icon" viewBox="0 0 100 100">
                        <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                    </svg></button><button class="flickity-button flickity-prev-next-button next" type="button"
                    aria-label="Next"><svg class="flickity-button-icon" viewBox="0 0 100 100">
                        <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"
                            transform="translate(100, 100) rotate(180) "></path>
                    </svg></button>
            </div>
        </div> --}}
<script>
    $('#tab-pwb_tab').hide();
    $('#tab-reviews').hide();

    function showTabPwd(){
        $('#tab-pwb_tab').show();
        $('#tab-description').hide();
        $('#tab-reviews').hide();
        // window.location.href = '#tab-pwb_tab';
    }

    function showTabReview(){
        $('#tab-pwb_tab').hide();
        $('#tab-description').hide();
        $('#tab-reviews').show();
        // window.location.href = '#tab-reviews';
    }

    function showTabDesc(){
        $('#tab-pwb_tab').hide();
        $('#tab-description').show();
        $('#tab-reviews').hide();
        // window.location.href = '#tab-description';
    }


</script>
@endsection
