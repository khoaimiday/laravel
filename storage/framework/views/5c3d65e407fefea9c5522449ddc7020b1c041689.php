<section class="about">
    <div class="container">
        <span class="span" style="display: block"></span>
    <div class="row">
        <div class="col-md-3 featured-box">
            <div class="about__img">
            <img src="<?php echo e(url('img/logo_about/freeDelivery.png')); ?>" alt="">
            </div>
            <div class="about__content">
                <h5 class="uppercase">MIỄN PHÍ VẬN CHUYỂN</h5>
                <p>Miễn phí vận chuyển cho các đơn hàng trên 800,000VNĐ và nhận hàng nhanh chóng.</p>
            </div>
        </div>
        <div class="col-md-3 featured-box about__border-left">
            <div class="about__img">
                <img src="<?php echo e(url('img/logo_about/heart.png')); ?>" alt="">
            </div>
            <div class="about__content">
                <h5 class="uppercase">TẬN TÂM PHỤC VỤ</h5>
                <p style="text-align: center;">Dịch vụ chăm sóc khách hàng chuyên nghiệp luôn sẵn sàng giải đáp mọi thắc mắc
                    của bạn. <strong>Hotline miễn phí: 1800 66 66 66</strong></p>
            </div>
        </div>
        <div class="col-md-3 featured-box about__border-left">
            <div class="about__img">
                <img src="<?php echo e(url('img/logo_about/location.jpg')); ?>" alt="">
            </div>
            <div class="about__content">
                <h5 class="uppercase">CỬA HÀNG GẦN BẠN</h5>
                <p>Cucumber đang mở rộng hệ thống cửa hàng gần bạn để tư vấn và chăm sóc bạn tốt hơn. Hãy ghé thăm và trải nghiệm
                    nhé!</p>
            </div>
        </div>
        <div class="col-md-3 featured-box about__border-left">
            <div class="about__img">
                <img src="<?php echo e(url('img/logo_about/shoppingCart.png')); ?>" alt="">
            </div>
            <div class="about__content">
                <h5 class="uppercase">MUA HÀNG TRỰC TUYẾN</h5>
                <p>Giá bán trên trang chỉ áp dụng khi mua sắm trực tiếp trên trang thương mại điện tử của Cucumber.</p>
            </div>
        </div>
    </div>
    <span class="span" style="display: block"></span>
    </div>
</section>

<style>
    /* CSS ABOUT PAGE */
.about{
    text-align: center;
    font-size: 15px;
    background-color: white;
}
.about .featured-box{
    margin: 0;
    padding: 30px 15px;
}

.about .about__img{
    width: 70px;
    margin: 0 auto;
}
.about .about__img img{
    width: 100%;
}
.about .about__content{
    padding-top: 20px;
    
}
.about__border-left{
    border-left: 1px solid #ececec;
}
.about .span{
    height: 30px;
}
</style>
<?php /**PATH E:\xampp\htdocs\laravel\laravel\resources\views/fragments/about.blade.php ENDPATH**/ ?>