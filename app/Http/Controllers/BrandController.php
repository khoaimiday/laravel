<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.index');
   }

    public function create(){
        return view('admin.brand.create');
    }

    public function postCreate(Request $request){

        $brand = new Brand();

        $brand->brand_name = $request->brandName;
        $brand->brand_email = $request->brandEmail;
        $brand->description = $request->brandDesc;

        if($request->hasFile('brandImg')){
            $file = $request->file('brandImg');
            $extension = $file->getClientOriginalExtension();


            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
                return redirect('admin/brand/create')->with(['flash_level'=>'danger', 'flash_message'=>'You can only upload image with .jpg | .png | .jpeg']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/feature/brand/", $imageName);
            $cate->brand_logo = $imageName;
        }else{
            $imageName = "";
        }
        $brand->save();
        return redirect()->action('BrandController@index')->with(['flash_level' => 'success', 'flash_message' => 'Created Successfully !']);
    }

    public function update($id){
        $brand = Brand::find($id);
        return view('admin.brand.update')->with(['brand'=>$brand]);
    }

    public function postUpdate(Request $request, $id){
        $brand = Brand::withTrashed()->find($id);
        $brand->brand_name = $request->brandName;
        $brand->brand_email = $request->brandEmail;
        $brand->description = $request->brandDesc;

        if($request->hasFile('brandImg')){
            $file = $request->file('brandImg');
            $extension = $file->getClientOriginalExtension();

            if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
                return redirect("admin/brand/update/".$id)->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/feature/brand/", $imageName);
            $brand->brand_logo = $imageName;
        } else {
            $imageName = "";
        }

        if ($brand->trashed() && $request->sts_cd =="A") {
            $brand->restore();
        }
        if (!$brand->trashed() && $request->sts_cd =="D") {
            $brand->delete();
        }

        $brand->save();
        return redirect()->action('BrandController@index')->with(['flash_level' => 'success', 'flash_message' => 'Updated Successfully !']);
    }

    public function delete($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->action('BrandController@index');
    }

}
