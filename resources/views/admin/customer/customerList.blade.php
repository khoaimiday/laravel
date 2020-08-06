@extends('admin.Adminlayout')
@section('content')
<style>
table 
{
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid;
}

th, td {
  text-align: left;
  padding: 8px;
  border-style: solid;
}
.pagination{
    font-size: 20px;
    padding-left:40%;
    padding-top: 30px;
}
.card-body
{
    padding-left:20%;
    padding-right: 100px;
}
.accordion {
  background-color: white;
  color:blue;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  outline: none;
  font-size: 20px;
  transition: 0.4s;
  height: 100%;
}

.active, .accordion:hover {
  background-color: white; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.col-sm-3{
  float: left;
  width: 20%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
  border-right: 2px black dotted;
}
.col-sm-9{
  float: left;
  width: 75%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
  
}



/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column1 a{
    font-size: 20px;
    color:blue;
}
a
{
  font-size: 20px;
}


</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
{{--    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">--}}
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <div class="container-fluid">
    <div class="row">
     <div class="col-sm-3" style="background-color:white;">
      <h1><strong>Quản Lý Admin</strong></h1>
        <div><a href="{{url('customer/customerList')}}">Danh sách Khách Hàng &raquo;</a></div>
    </div>
  <div class="col-sm-9" style="background-color:white;">
    <div class="row">
     <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <h1 class="class-title" style="color: black;"><strong>Danh Sách Admin</strong></h1>        
            </div>
          <div class="card-body">
              <div class="table-responsive">
              <table class="table table-dark">
                      <thead class="text-primary">
                            <th>ID</th>
                            <th>Họ Tên</th>
                            <th>Email</th>
                            <th>Điện Thoại</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Chức Năng</th>
                      </thead>
                        <tbody>
                         <tr>
                            @foreach($users as $u)
                            <td>{{$u->id}}</td>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->phone}}</td>
                            <td>{{$u->gender}}</td>
                            <td>{{$u->address}}</td>
                            <td>{{$u->image}}</td>
                            <td><a class="btn btn-danger" href="{{url('customer/customerDelete/'.$u->id)}}">Xóa</a>
                            <a class="btn btn-primary" href="{{url('customer/customerUpdate/'.$u->id)}}">Update</a></td>
                          </tr>
                            @endforeach
                        </tbody>
                   </table>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
