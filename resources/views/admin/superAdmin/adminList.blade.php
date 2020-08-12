@extends('admin.Adminlayout')
@section('title', 'List Admin - Admin')
@section('content')

<style>
  .modal-header
  {
    background-color: black;
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
                      <h3 class="modal-title"></h3>
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
                                <input class="input-field" type="text" name="name" placeholder="Họ Tên">
                                @if($errors->has('name'))
                                    <small style="color:red;font-size:14px;">{{$errors->first('name')}}</small>
                                @endif
                              </div>

                              <div class="input-container">
                                <i class="fa fa-envelope icon"></i>
                                <input class="input-field" type="text"name="email" placeholder="Email">
                                @if($errors->has('email'))
                                    <small style="color:red;font-size:14px;">{{$errors->first('email')}}</small>
                                @endif
                              </div>
  
                              <div class="input-container">
                                <i class="fa fa-key icon"></i>
                                <input class="input-field" type="password"name="password" placeholder="Mật Khẩu" >
                                @if($errors->has('password'))
                                    <small style="color:red;font-size:14px;">{{$errors->first('password')}}</small>
                                @endif
                              </div>
                              <div class="input-container">
                                <select name="srole" hidden>
                                  <option value="1">Admin</option>
                                </select>
                              
                                
                              </div>
        
<!-- Modal footer -->
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-dark">Thêm</button>
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
  <script>

</script>