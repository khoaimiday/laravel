<header class="tophead">
    <div class="tophead-menu">
        <ul class="tophead-menu-list">
            <li class="tophead-menu-left"><a href=""><img src="{{url('img/nav/Home.png')}}" alt="">  Trang chủ</a></li>
            <li class="tophead-menu-left"><a href=""><img src="{{url('img/nav/Product.png')}}" alt="">  Sản phẩm</a></li>
                <!-- <div class="tophead-menu-dropdown">
                    <ul class="tophead-menu-dropdown">
                        <li><a href="">Dược phẩm không kê đơn</a></li>
                        <li><a href="">Thực phẩm chức năng</a></li>
                    </ul>
                </div> -->
            <li class="tophead-menu-left"><a href=""><img src="{{url('img/nav/Store.png')}}" alt="">  Cửa hàng</a></li>
            <li class="tophead-menu-right"><a href="">Giỏ hàng  <img src="{{url('img/nav/cart.png')}}" alt=""></a></li>
            <li class="tophead-menu-right"><a href="">Liên hệ  <img src="{{url('img/nav/Contact2.png')}}" alt=""></a></li>
            <li class="tophead-menu-right"><a href="">FAQs  <img src="{{url('img/nav/FAQ.png')}}" alt=""></a></li>
            <li class="tophead-menu-right"><a href="{{('news')}}">Blog  <img src="{{url('img/nav/Blog2.png')}}" alt=""></a></li>    
        </ul>
    </div>
</header>
<style>
    .tophead-menu-left {
        float:left;
        list-style-type:none;
        display:block; 
    } 
    .tophead-menu-right{
        display:block;
        list-style-type:none;
        float:right;
    }
    .tophead-menu-list li a {
        text-decoration:none;
        color:white;
        display:block;
        padding:4px 15px;
        margin:5px;
        text-align:center;
        border-radius:20px;
        border:1px solid #9acd32;
        box-shadow: 0px 6px 20px 0px rgba(0,0,0,0.2);
        transition: all ease-in-out 0.2s;
        cursor: pointer;
    }
    .tophead-menu-list li a:hover{
        background-color: #000;
        opacity:0.3;
        border:1px solid #ddd;
        border-radius: 20px;
        color:#ddd;
        font-weight: 500px;
        line-height: 25px;
    }
    .tophead{
        display:block;
        margin-top:0;
        padding:2px;
        background:#9acd32;
        opacity:0.8;
    }
    .tophead-menu ul{
        display:block;
        background-color:#9acd32;
        font-size:15px;
        margin:0;
        overflow:hidden;
    }
    .tophead-menu ul li a img{
        width:15px;
        height:15px;
    }
</style>