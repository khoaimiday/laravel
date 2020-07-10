<div class="navigation leftNav">
   <div class="destopNav">
    <div id="visibleNav">
       <a href="" class="logoNav" id="logo">
            <img src="{{ url('img/nav/logo-company.png') }}" alt="">
       </a>
       <ul>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconMedicine.png') }}" alt=""></div>
                <span class="Text">Dược phẩm</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconFunctionalFood.png') }}" alt=""></div>
                <span class="Text">Thực phẩm chức năng</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconStore2.png') }}" alt=""></div>
                <span class="Text">Cửa hàng</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconBlog2.png') }}" alt=""></div>
                <span class="Text">Blog sức khoẻ</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconAboutUs.png') }}" alt=""></div>
                <span class="Text">Về chúng tôi</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconAdvisory.png') }}" alt=""></div>
                <span class="Text">Tư vấn</span>
            </a>
        </li>
        <li class="absorbable">
            <a href="" >
                <div class="iconModel"><img src="{{ url('img/nav/iconMember2.png') }}" alt=""></div>
                <span class="Text">Thành viên</span>
            </a>
        </li>
       </ul>
    </div>
  </div>
</div>

<style>
    div{
        display:block;
    }
    .leftNav .destopNav #visibleNav ul{
        display:block;
        list-style:none;
        padding-inline-start:0;
    }
    .leftNav .destopNav #visibleNav ul li a{
        display:flex;
        flex-direction:column;
        align-items:center;
        height:98px;
        line-height:16px;
        text-align:center;
        cursor:pointer;
        border-top: 1px solid rgba(223,228,232,0.5);
        width:100%;
        text-decoration:none;
        font-family:Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;
        font-size:11px;
        box-sizing:border-box;
        background-color:transparent;
    }
    .leftNav .destopNav #visibleNav a img{
         height:100px;
         width:100px;
         margin: 0 ;
    }
    .leftNav .destopNav #visibleNav ul li a img{
        margin-top:20px;
        width:29px;
        height:29px;
    }
    .leftNav .destopNav #visibleNav ul li a .Text{
        margin:4px 10px 0 10px;
        color:#001e50;
    }
    .navigation {
        position:relative;
        z-index:1015;
    }
    .navigation .destopNav{
        display:none;
    }
    .destopNav{
        background:#fff;
        height:100%;
        position:fixed;
        top:0;
        z-index:8000;
        border-right:1px solid rgba(223,228,232,0.5);
    }
    .destopNav #visibleNav{
        width:95px;
        height:100%;
        float:left;
        position:relative;
        overflow:hidden;
    }
    @media(min-width:768px) {
        .navigation .destopNav {
             display:block;
        }
    }


</style>
