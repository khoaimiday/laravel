<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    // List Users
    public function adminList()
    {
        $users = DB::table('users')->where('role','<>',0)->get();
        return view('admin.superAdmin.adminList')->with(['users'=>$users]);
    }
    public function CreateAdmin()
    {
        return view('admin.superAdmin.CreateAdmin');
    }
    public function PostCreateAdmin(Request $request)
    {
        $this->validate(
            $request,
            [
                'name'=>'bail|required|string|max:255',
                'password'=>'bail|required|string|min:8',
                'email' => 'bail|required|string|regex:/^[a-zA-Z0-9\._]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9]+[\.a-zA-Z0-9]*$/i|max:255|unique:users,email',
            ],
            [
                'name.required' => 'User Name can not blank !',
                'name.max' => 'User Name has max 255 characters !',
                'email.required' => 'Email can not blank !',
                'email.regex' => 'The format must be EMAIL style',
                'email.max' => 'Email has max 255 characters !',
                'email.unique' => 'Email has already existed !',
                'password.required' => 'The password can not blank !',
                'password.min' => 'The password has min 8 characters !',

            ]
            );
        $email=$request->email;
        $name=$request->name;
        $password = $request->password;
        $role = $request->srole;
        DB::table('users')->insert(['role'=>intval($role),'password'=>$password,'email'=>$email,'name'=>$name]);
	        return redirect('/superAdmin/adminList');
    }
    public function adminUpdate($id)
    {
        $users = DB::table('users')->where('id',$id)->first();
        return view('admin.superAdmin.adminUpdate',['users'=>$users]);
    }
    public function adminPostUpdate(Request $request, User $user)
    {
        // validate
        Validator::make($request->all(), [
            'email' => 'bail|required|string|regex:/^[a-zA-Z0-9\._]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9]+[\.a-zA-Z0-9]*$/i|max:255|unique:users,email',
            'password'      =>'bail|required|string|min:8',
        ])->validate();
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
      
        $users = DB::table('users')->where('id',$id)->delete();
       return redirect('/customer/customerList');  
   }


    //CUSTOMER
    public function customerList()
    {
        $users = DB::table('users')->where('role',0)->get();
        return view('admin.customer.customerList')->with(['users'=>$users]);
    }
    public function detailCustomer($id)
    {
	    $users = DB::table('users')->where('id',$id)->first();
        return view('user.users.detailCustomer',['users'=>$users]);
    }
    public function customerPostUpdate(Request $request,$id)
    {
        $users = User::find($id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->address=$request->address;
        $users->dob=$request->dob;
        $users->phone=$request->phone;
        $users->gender=$request->gender;
        $users->save();
        
	    return redirect()->action('HomeController@index');
    }
    public function customerDeleteList()
    {
        $users = DB::table('users')->where('deleted_at','<>',NULL)->get();
        return view('admin.customer.customerDeleteList');
    }








     


    //black list
    public function test(Request $request){
        $email = $request->email;
        $password = $request->password;
        if(User::where('email',$email)->count() == 0 )
            return back()->with(['flash_level' => 'danger','flash_message' => 'ID or Password may be incorrect.' ]);
        elseif(User::where('email',$email)->where('role',5)->count() > 0)
            return back()->with(['flash_level' => 'danger','flash_message' => 'You are banned. Please email Tinyhub@gmail.com for reason.' ]);
        elseif  (Auth::attempt(['email' => $email, 'password' => $password]))
            return redirect()->intended('/');
        
    }
}
