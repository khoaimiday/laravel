<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    // List Users
    public function adminList()
    {
        $users = User::where('role','<>',0)->get();
        return view('admin.superAdmin.adminList')->with(['users'=>$users]);
    }
    public function CreateAdmin()
    {
        return view('admin.superAdmin.CreateAdmin');
    }
    public function PostCreateAdmin(Request $request)
    {
        /* $this->validate(
            $request,
            [
                'name'      =>'bail|required|string|max:255',
                'password'  =>'bail|required|string|min:8',
                'email'     => 'bail|required|string|regex:/^[a-zA-Z0-9\._]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9]+[\.a-zA-Z0-9]*$/i|max:255|unique:users,email',
            ],
            [
                'name.required'     => 'User Name can not blank !',
                'name.max'          => 'User Name has max 255 characters !',
                'email.required'    => 'Email can not blank !',
                'email.regex'       => 'The format must be EMAIL style',
                'email.max'         => 'Email has max 255 characters !',
                'email.unique'      => 'Email has already existed !',
                'password.required' => 'The password can not blank !',
                'password.min'      => 'The password has min 8 characters !',

            ]
            ); */
        $email=$request->email;
        $name=$request->name;
        $password = $request->password;
        $role = $request->srole;
        DB::table('users')->insert(['role'=>intval($role),'password'=>$password,'email'=>$email,'name'=>$name]);
	        return redirect('/superAdmin/adminList')->with(['flash_level' => 'success','flash_message' => 'Success. Thank you !' ]);;
    }
    public function adminUpdate($id)
    {
        $users = DB::table('users')->where('id',$id)->first();
        return view('admin.superAdmin.adminUpdate',['users'=>$users]);
    }
    public function adminPostUpdate(Request $request, User $user)
    {
        // validate
    /* Validator::make($request->all(), [
        'email'         => 'bail|required|string|regex:/^[a-zA-Z0-9\._]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9]+[\.a-zA-Z0-9]*$/i|max:255|unique:users,email',
        'password'      =>'bail|required|string|min:8',
    ])->validate(); */
        $users = User::find($request->id);
        $users->email         = trim($request->email);
        $users->password     =trim($request->password);
        $users->save();

        return redirect()->action('CustomerController@adminList')->with(['flash_level' => 'success', 'flash_message' => 'Update account success !']);;
    }
    public function deleteAdmin($id)
    {
       $users=DB::table('users')->where('id',$id)->delete();
       return redirect('/superAdmin/adminList');

   }
   public function customerDelete($id)
   {
        $cust = User::find($id)->delete();
       return redirect('/customer/customerList')->with(['flash_level' => 'success','flash_message' => 'Deleted !' ]);;  

   }


    //CUSTOMER
    public function customerList()
    {
        $users = User::where('role',0)->get();
    
        return view('admin.customer.customerList')->with(['users'=>$users]);
    }
    public function detailCustomer($id)
    {
	    $users = DB::table('users')->where('id',$id)->first();
        return view('user.users.detailCustomer',['users'=>$users]);
    }
    public function customerPostUpdate(Request $request,$id)
    {
        $users=User::find($id);
        // validate
 /* Validator::make($request->all(), 
                        [
                        'email'         => 'bail|required|string|regex:/^[a-zA-Z0-9\._]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9]+[\.a-zA-Z0-9]*$/i|max:255|',
                        'password'      =>'bail|required|string|unique:users,password|min:8',
                        'name'          =>'bail|required|string|max:255',
                        'gender'        => 'bail|required|not_in:0',
                        'phone'         => 'bail|required|regex:/^0[1-9]\d{8,9}$/i',
                        'phone'         => 'unique:users,phone,' . $users->id,
                        'address'       => 'bail|required',
                        ],
                        [       
                        'email.required'    => 'Email không được bỏ trống !',
                        'email.regex'       => 'Không đúng định đang Email',
                        'email.max'         => 'Email tối đa 255 ký tự!',
                        'name.min'          => 'Tên ít nhất 3 ký tự !',
                        'name.max'          => 'Tên nhiều nhất 255 ký tự !',
                        'name.required'     => 'Tên không được bỏ trống!',
                        'dob.required'      => 'Ngày sinh không được bỏ trống !',
                        'dob.date'          => 'Ngày sinh phải đúng định dạng!',
                        'gender.required'   =>  'Xin hãy chọn một!',
                        'phone.required'    =>  'Số điện thoại không được bỏ trống !',
                        'phone.regex'       =>  'Phone numbers must have at least 10 numbers and at most 11 numbers !',
                        'phone.unique'      =>  'Phone has already existed !',
                        'address.required'  => 'Address can not blank !',
                        'password.required' => 'Mật khẩu không được để trống !',
                        'password.min'      => 'Mật khẩu ít nhất là 8 ký tự !',
                        'password.unique'   => 'Mật khẩu trùng với mật khẩu cũ'

                        

])->validate(); */ 

        $users->name=$request->name;
        $users->email=$request->email;
        $users->address=$request->address;
        $users->dob=$request->dob;
        $users->phone=$request->phone;
        $users->gender=$request->gender;
        $users->password=$request->password;
        $users->save();
        
	    return redirect()->action('HomeController@index');
    }
    public function customerDeleteList()
    {
        $users=User::onlyTrashed()->get();
        return view('admin.customer.customerDeleteList')->with(['users'=>$users]);
    }
    public function resetPassword($id)
	    {
	        DB::table('users')->where('id',$id)->update(['password'=>'#1234abc']);
	        return redirect()->action('CustomerController@customerList');
	
	    }

     
}
