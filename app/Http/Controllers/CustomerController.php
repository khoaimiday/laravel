<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class CustomerController extends Controller
{
    public function customerList()
    {
        $users = DB::table('users')->where('role',0)->get();
        return view('admin.customer.customerList')->with(['users'=>$users]);
    }
    public function customerDelete($id)
    {
            $users = User::find($id);
    	    $users->delete();
        	return redirect()->action('admin.customer.customerList');  
    }
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
        $email=$request->email;
        $name=$request->name;
        $password = $request->password;
        $role = $request->srole;
        DB::table('users')->insert(['role'=>intval($role),'password'=>$password,'email'=>$email,'name'=>$name]);
	        return redirect('/superAdmin/adminList');

        

    }
    public function deleteAdmin($id)
    {
        $users=User::find($id);
        if($users != null)
        {
        $users->delete();
        return redirect()->action('CustomerController@adminList')->with(['message'=>'Successfully deleted!!']);
        }
        


    }
    //CUSTOMER
    public function adminUpdate($id)
    {
        $users = User::find($id);
	    return view('admin.superAdmin.adminUpdate',['users'=>$users]);
    }
     public function AdminPostUpdate($request, $id)
    {
        
        $email=$request->input('email');
        $password=$request->input('password');
        
       
        $users = User::find($id);
        $users->name = $users['name'];
        $users->email = $users['email'];
        
        $users->save();
	    return redirect()->action('/superAdmin/adminList');
	
            } 
	               
}
