@extends('admin.Adminlayout')
@section('title', 'List Admin - Admin')
@section('content')

<style>
  .modal-header
  {
    background-color: black;
    color: white;
  }
</style>
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
    <div class="container">
<!-- Button to Open the Modal -->
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">Thêm Admin</button>

<!-- The Modal -->
              <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
      
<!-- Modal Header -->
                    <div class="modal-header">
                      <h3 class="modal-title">Đăng ký</h3>
                        <button type="button" class="close" data-dismiss="modal" style="color: white;" >&times;</button>
                    </div>

<!-- Modal body -->
                        <div class="modal-body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!!Session::get('flash_message')!!}
                            </div>
                            @endif
                          <form action="{{url('superAdmin/PostCreateAdmin')}}" method="post" id="form-login">
                            {{csrf_field()}}
                              <div class="input-container">
                                <i class="fa fa-user icon"></i>
                                <input class="input-field" type="text" name="name" placeholder="Họ Tên" id="name">
                               
                              </div>

                              <div class="input-container">
                                <i class="fa fa-envelope icon"></i>
                                <input class="input-field" type="text"name="email" placeholder="Email" id="email">
                               
                              </div>
  
                              <div class="input-container">
                                <i class="fa fa-key icon"></i>
                                <input class="input-field" type="password"name="password" placeholder="Mật Khẩu" id="password" >
                                
                              </div>
                              <div class="input-container">
                                <select name="srole" hidden>
                                  <option value="1">Admin</option>
                                </select>
                              
                                
                              </div>
        
<!-- Modal footer -->
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-dark" onclick="btnthem" id="btnthem">Thêm</button>
                                </div>
                              </form>     
                            </div>
                          </div>
                          </div>
                        </div>
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Admin List</h6>
            </div>
            <div class="card-body">
              <!-- List User -->
              @if(Session::has('flash_message'))
              <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!!Session::get('flash_message')!!}
              </div>
              @endif
              <table class="table card-text text-center" id="dbtable">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Control</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($users as $u)
                  <tr>
                    <td class="align-middle">{{$u->name}}</td>
                    <td class="align-middle">{{$u->email}}</td>
                    <td class="align-middle">{{$u->role==1? 'Admin':'User'}}</td>
                    <td class="align-middle"><a href="{{url('/superAdmin/adminUpdate/'.$u->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                    <a href="{{url('/superAdmin/deleteAdmin/'.$u->id)}}" class="badge badge-danger p-2"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection
  <script type="text/javascript">
function btnthem()
{
  var i;
  var hoten = document.getElementById("name");
  if(hoten.value == "")// kiểm tra hoten có bỏ trống không
{
i += "Bạn chưa nhập họ tên.<br/>";
}
var reg_email =/^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;

var email = document.getElementById("email");
  if(email.value!="")
    {
  if(reg_email.test(email.value)==false)
    i+="Email không hợp lệ.<br/>";
    }
  else
    i+="Không được bỏ trống email.<br/>";
var password = document.getElementById("password");
  if(password.value !="")
  {
  if(password.value.length<8 passwod.value.length >20)
    i+= "Password phải có độ dài từ 8-20 ký tự.<br/>";
  }
  else
    i+="Password không được bỏ trống.<br/>";
    if(i!="")
document.getElementById("loi").innerHTML=i+"\n";
else
document.getElementById("loi").innerHTML="Đăng ký thành công";
}

</script>