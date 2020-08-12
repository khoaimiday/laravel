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
            <input type="text" class="form-control" name="id" readonly value="{{$users->id}}">
        </div>
        <div class="form-group">
            <label>Họ Tên</label>
             <input type="text" class="form-control" name="name" value="{{$users->name}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="{{$users->email}}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" value="{{$users->phone}}">
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" name="address" value="{{$users->address}}">
        </div>
        <div class="form-group">
            <label>Ngày sinh</label>
            <input type="date" class="form-control" name="dod" value="{{$users->dob}}">
        </div>
        <div class="form-group">
         <label class="form-group">Gioi tinh<span class="required" style="color: red;">*</span></label>
            <select class="form-control" name="gender">
                <option value="0">None</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
                                            
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


