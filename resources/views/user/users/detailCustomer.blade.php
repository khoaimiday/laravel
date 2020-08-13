@extends('layouts.default')

@section('content')
<style>
.container
    {
        width: 30%;
        font-size: 15px;
        color: black;
        background-color: white;
    }

.form-footer{
    padding-top: 5px;
}
.main{
    padding-top: 15px;
    padding-bottom: 50px;
}
#gender{
    width: 20px;
}
</style>
<body>

<div class="container">
    <form action="{{url("users/customerPostUpdate/" .$users->id)}}" method="post">
    {{ csrf_field() }}
        <div class="form-header">
            <h2>Thông tin khách hàng</h2>
        </div>

        <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control" name="id" readonly id="id" value="{{$users->id}}">
        </div>
        <div class="form-group">
            <label>Họ Tên</label>
             <input type="text" class="form-control" name="name" id="name" value="{{$users->name}}">
             @if($errors->has('name'))
            <small style="color:red;font-size:14px;">{{$errors->first('name')}}</small>
            @endif
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{$users->email}}">
            @if($errors->has('email'))
            <small style="color:red;font-size:14px;">{{$errors->first('email')}}</small>
            @endif
        </div>
        <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="text" class="form-control" name="email" id="password" value="{{$users->password}}">
            @if($errors->has('password'))
            <small style="color:red;font-size:14px;">{{$errors->first('password')}}</small>
            @endif
            
            </div>   
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{$users->phone}}">
            @if($errors->has('phone'))
            <small style="color:red;font-size:14px;">{{$errors->first('phone')}}</small>
            @endif
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" name="address" id="address" value="{{$users->address}}">
            @if($errors->has('address'))
            <small style="color:red;font-size:14px;">{{$errors->first('address')}}</small>
            @endif
        </div>
        <div class="form-group">
            <label>Ngày sinh</label>
            <input type="date" class="form-control" @error('dob') is-invalid @enderror" min="1900-01-01" max="2006-12-31" name="dob" id="dob" value="{{$users->dob}}">
            @if($errors->has('dob'))
            <small style="color:red;font-size:14px;">{{$errors->first('dob')}}</small>
            @endif
        </div>
        <div class="form-group">
         <label class="form-group">Gioi tinh<span class="required" style="color: red;">*</span></label>
            <select class="form-control" name="gender">
                <option value="0">None</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            @if($errors->has('gender'))
            <small style="color:red;font-size:14px;">{{$errors->first('gender')}}</small>
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
<script>
   
</script>
@endsection



