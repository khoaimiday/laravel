<!--      <form action="post" action="{{url('superAdmin/AdminPostUpdate/'.$users->id)}}"></form>
    {{ csrf_field() }}
<table>
    <tr>
        <td>Email</td>
        <td>Mật Khẩu</td>
    </tr>
    <tr>
        <tbody>
            @foreach($users)
        <td>{{$users->email}}</td>
        <td>{{$users->password}}</td>
            @endforeach
        </tbody>  
    </tr>
    <tr>
    <button type="button" class="btn btn-success">Cập Nhật</button>
    </tr>
</table> -->
 -->