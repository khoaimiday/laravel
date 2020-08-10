@foreach($cmts as $cmt)
<div class="panel panel-default">
    <div class="panel-heading">
        Đăng bởi: Người dùng có mã <b>{{$cmt->user_id }}</b> lúc <i>{{$cmt->created_at}}</i>
    </div>
    <div class="panel-body">
        <div class="panel-title">
           <h6> {{$cmt->title}}</h6>
        </div>
        <div class="panel-content">
            <p>{{$cmt->content}}</p>
        </div>
    </div>
    <div class="panel-footer" align="right">
        <button class="btn btn-default reply" type="button">Trả lời</button>
    </div>
</div>
@endforeach