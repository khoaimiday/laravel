<footer class="main-footer">
    <div class="footer-first">
        <div class="footer-inner">
            <div class="footer-width-25">
                <div class="footer-title">Liên hệ</div>
                <ul class="footer-list">
                    <li class="footer-li"><a href="#">Hotline: 9:00 - 18:00</a></li>
                    <li class="footer-li"><a href="#"> Online chat: 7:00 - 10:00</a></li>
                    <li class="footer-li"><a href="#" class="">Trung tâm hỗ trợ</a></li>
                    <li class="footer-li"><a href="#" class="">Cách thức mua</a></li>
                    <li class="footer-li"><a href="#" class="">Vận chuyển và giao nhận</a></li>
                    <li class="footer-li"><a href="#" class="">Quy định quốc tế</a></li>
                    <li class="footer-li"><a href="#" class="">Trả hàng</a></li>
                </ul>
            </div>
            <div class="footer-width-25">
                <div class="footer-title">CUCUMBER</div>
                <ul class="footer-list">
                    <li class="footer-li"><a href="#" class="">Về Công ty</a></li>
                    <li class="footer-li"><a href="#" class="">Về Sản phẩm</a></li>
                    <li class="footer-li"><a href="#" class="">Các nhà cung cấp</a></li>
                    <li class="footer-li"><a href="#" class="">Quy định và điều khoản</a></li>
                    <li class="footer-li"><a href="#" class="">Truyền thông</a></li>
                    <li class="footer-li"><a href="#" class="">Các câu hỏi thường gặp</a></li>
                    <li class="footer-li"><a href="#" class="">Hệ thống vận hành</a></li>
                </ul>
            </div>
            <div class="footer-width-50">
                <div class="slogan">
                    <img src="{{url('img/logo-company.png')}}" alt="">
                    <a href="">Người bạn đồng hành của mọi gia đình</a>
                    <a href="">Nâng tầm chất lượng cuộc sống Việt.</a>
                </div>
                <div class="download-app">
                    <a href="https://appstore.com" class="icon-appstore-footer"><img
                            src="{{ url('img/download-appstore.png') }}"></a>
                    <a href="https://play.google.com" class="icon-android-footer"><img
                            src="{{ url('img/download-googleplay.png') }}"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-second">
        <div class="footer-inner">
            <div class="footer-width-50">
                <div class="footer-title">Phương thức thanh toán</div>
                <div class="pull-left"><img src="{{url('img/payment.png')}}" alt="" width="40%"></div>
                <div class="pull-left"><img src="{{ url('img/payment_cashdelivery.png') }}" alt="" width="30%"></div>
            </div>
            <div class="footer-width-25">
                <div class="footer-title">Dịch vụ giao nhận</div>
                <div class="pull-left"><img src="{{ url('img/delivery_ahamove.png') }}" alt="" width="35%">
                    <img src="{{ url('img/delivery_GHN.png') }}" alt="" width="30%"></div>
                <div class="pull-left"><img src="{{ url('img/delivery_ninjavan.png') }}" alt="" width="35%"></div>
            </div>
            <div class="footer-width-25">
                <div class="footer-title">Chứng nhận bởi</div>
                <div class="pull-left"><img src="{{ url('img/verify_boCT.png')}}" alt="" width="70%"></div>
            </div>
        </div>
    </div>
    <div class="footer-third">
        <div class="footer-inner">
            <div class="footer-width-50">
                <div class="footer-title">Công ty cổ phần dược phẩm Cucumber</div>
                <ul class="footer-list">
                    <li class="footer-li">Giấy chứng nhận ĐKKD số 000000000000 do Sở KH-ĐT TP.HCM cấp ngày 01/01/2000
                    </li>
                    <li class="footer-li">Địa chỉ: 10x01 Cách Mạng Tháng 8, phường 5, quận 10, Tp.HCM</li>
                    <li class="footer-li">Số 20x02 Trường Chinh, phường Khương Thượng, quận Đống Đa, Tp.Hà Nội</li>
                    <li class="footer-li">Điện thoại: (84 28) 66667777 - 88889999 - Email:cskh@cucumber.com.vn</li>
                </ul>
            </div>
            <div class="footer-width-25">
                <div class="pull-left follow-icon">
                    <a href="https://www.facebook.com" class=""><img src="{{url('img/follow_fb.png')}}" alt=""></a>
                    <a href="https://www.instagram.com" class=""><img src="{{url('img/follow_in.png')}}" alt=""></a>
                    <a href="https://twitter.com" class=""><img src="{{url('img/follow_tt.png')}}" alt=""></a>
                    <a href="https://www.youtube.com" class=""><img src="{{url('img/follow_yt.png')}}" alt=""></a>
                    <a href="https://www.linkedin.com" class=""><img src="{{url('img/follow_ln.png')}}" alt=""></a>
                </div>
            </div>
            <div class="footer-width-25">
                <div class="copyright">
                    <strong>Copyright &copy; 2020 <a href="{{ url('/index') }}"> Cucumber</a>.</strong>
                </div>
            </div>
        </div>
    </div>
</footer>


<style>
    .main-footer {
        font-family: Roboto-Regular, 'Helvetica Neue', Helvetica, Tahoma, Arial, Sans-serif;
        font-weight: 200;
        font-size: 12px;
        padding: 0;
        min-width: 1188px;
        width: 100%;
        color: #888;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
    }

    .footer-first {
        background: #f6f6f6;
        padding: 20px 10px;
    }

    .footer-second {
        padding: 20px 10px;
        background: #fff;
    }

    .footer-third {
        padding: 20px 10px;
        background: #f6f6f6;
        color: black;
    }

    .footer-inner {
        margin: 0 auto;
        overflow: hidden;
    }

    .footer-width-50 {
        width: 50%;
        overflow: hidden;
        float: left;
    }

    .footer-width-25 {
        width: 25%;
        overflow: hidden;
        float: left;
    }

    a {
        text-decoration: none;
        cursor: pointer;
        background-color: transparent;
    }

    *,
    li,
    ol,
    ul {
        box-sizing: border-box;
        white-space: nowrap;
    }

    .footer-title {
        font-size: 16px;
        font-weight: 300;
        line-height: 35px;
        color: #0f136d;
    }

    ul {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
    }

    .footer-li {
        list-style: none;
        display: list-item;
    }

    .footer-li>a {
        color: #0f136d;
    }

    .footer-list {
        padding: 0;
        margin: 0;
    }

    .pull-left {
        display: block;
        float: left;
    }

    .slogan {
        margin: 40px;
    }

    .slogan>a {
        color: #0f136d;
        display: block;
    }

    .slogan>img {
        margin: -30px 0;
        float: left;
        display: inline-block;
        width: 150px;
    }

    .download-app {
        margin: 20px;
    }

    .download-app>a>img {
        width: 120px;
        display: inline-block;
        padding-left: 15px 5px;
    }

    .copyright {
        padding-top: 30%;
        float: right;
    }

    .follow-icon>a>img {
        width: 13%;
        padding-top: 12%;
        padding-left: 5px;
    }
</style>
