@extends('admin.Adminlayout')
@section('title', 'Update Admin - Admin')
@section('content')
<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

<style>
.container
    {
        width: 50%;
        font-size: 15px;
        padding-top: 60px;
    }
form{
    border: 2px solid black;
    padding: 5px;
}






</style>
<body>

<div class="container">
    <form action="{{url('superAdmin/AdminPostUpdate/'.$users->id)}}" method="post" id="form-update">
    {{ csrf_field() }}
        <div class="form-header">
            <h2>Thông tin</h2>
            
</div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="{{$users->email}}">
            @if($errors->has('email'))
            <small style="color:red;font-size:14px;">{{$errors->first('email')}}</small>
            @endif
        </div>
        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password" class="form-control" name="password" value="{{$users->password}}">
            @if($errors->has('password'))
            <small style="color:red;font-size:14px;">{{$errors->first('password_get_info')}}</small>
            @endif
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <button type="reset" class="btn btn-success">Làm mới</button>
        </div> 
    </div> 
    </form>
</div>
           
</body>
</html>
@endsection

<script>
    $(function(){
        $('form-update').validate({
            rules:{
                email :{
                    required :true,
                    email:true,
                },
                password:{
                    required:true,
                    minlength:8
                }
            },
            submitHanndler:function(){
                console.log('xxx');
            }

        });

    });

</script>


 