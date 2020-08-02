<?php

namespace App\Http\Controllers;

use App\Product_type;
use App\Http\Controllers\Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index(){
         return view('admin.categories.index');
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function postCreate(Request $request){

        $cate = new Product_type();

        $cate->type_name = $request->cateName;
        $cate->description = $request->cateDesc;

        if($request->hasFile('cateImg')){
            $file = $request->file('cateImg');
            $extension = $file->getClientOriginalExtension();


            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
                return redirect('admin/categories/create')->with(['flash_level'=>'danger', 'flash_message'=>'You can only upload image with .jpg | .png | .jpeg']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/feature/categories/", $imageName);
            $cate->type_image = $imageName;
        }else{
            $imageName = "";
        }
        $cate->save();
        return redirect()->action('ProductTypeController@index')->with(['flash_level' => 'success', 'flash_message' => 'Created Successfully !']);
    }

    public function update($id){
        $cate = Product_type::find($id);
        return view('admin.categories.update')->with(['cate'=>$cate]);
    }

    public function postUpdate(Request $request, $id){
        $cate = Product_type::withTrashed()->find($id);
        $cate->type_name = $request->cateName;
        $cate->description = $request->cateDesc;

        if($request->hasFile('cateImg')){
            $file = $request->file('cateImg');
            $extension = $file->getClientOriginalExtension();

            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
                return redirect("admin/categories/update/".$id)->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/feature/", $imageName);
            $cate->type_image = $imageName;
        } else {
            $imageName = "";
        }

        if ($cate->trashed() && $request->sts_cd =="A") {
            $cate->restore();
        }
        if (!$cate->trashed() && $request->sts_cd =="D") {
            $cate->delete();
        }

        $cate->save();
        return redirect()->action('ProductTypeController@index')->with(['flash_level' => 'success', 'flash_message' => 'Updated Successfully !']);
    }

    public function delete($id){
        $cate = Product_type::find($id);
        $cate->delete();
        return redirect()->action('ProductTypeController@index');
    }
}
