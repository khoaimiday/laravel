<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_type;
use App\Brand;
use App\Http\Controllers\Faker\Factory;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.product.index',['products'=>$products]);

    }


    public function create()
    {
        $cates = Product_type::all();
        $brand = Brand::all();
         return view("admin.product.create",['c'=>$cates, 'b'=>$brand]);
    }


     // CREATE PRODUCT
    public function postCreate(Request $request)
    {

        $this->validate(
            $request,
            [
                'prodName'      => 'bail|required|unique:Products,product_name|regex:/^[a-zA-Z]{2,}/i|max:255',
                'prodPrice'     => 'required',
                'prodCate'      => 'bail|required|not_in:0',
                'prodBrand'     => 'bail|required|not_in:0',
                'prodWarranty'  => 'required',
                'shortDesc'     => 'required',
                'longDesc'      => 'required',
            ],
            [
                'prodName.required'            => 'Product title can not be blank !',
                'prodName.unique'              => 'Product title has already existed !',
                'prodName.regex'               => 'Product title has 2 character and must be string, can not start with number !',
                'prodName.min'                 => 'Product title has min 3 characters !',
                'prodName.max'                 => 'Product title has max 255 characters !',
                'prodPrice.required'           => 'Price can not be blank !',
                'prodCate.required'            => 'Please choose one of them !',
                'prodBrand.required'           => 'Please choose one of them !',
                'prodWarranty.required'        => 'Warranty Period can not be blank !',
                'shortDesc.required'           => 'Short Description can not be blank !',
                'longDesc.required'            => 'Long Description can not be blank !',
            ]
        );

        $p = new Product();
        $p->product_name        = $request->prodName;
        $p->price               = $request->prodPrice;
        $p->brand_id            = $request->prodBrand;
        $p->product_types_id    = $request->prodCate;
        $p->exp_date            = $request->prodWarranty;
        $p->short_description   = trim($request->shortDesc);
        $p->long_description    = trim($request->longDesc);


        if ($request->hasFile('prodImg')) {
            $file = $request->file('prodImg');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/product/createProduct")->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/feature/", $imageName);
            $p->image = $imageName;
        } else {
            $imageName = "";
        }

        $p->save();

        // Function gallery upload
        // $product_id = $p->id;
        // if($request->hasFile('galleryimg')){
        //     foreach ($request->file('galleryimg') as $file) {
        //         $product_gallery = new Gallery();
        //         if (isset($file)) {
        //             $ext   = $file->getClientOriginalExtension();
        //                 if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
        //                     return Redirect('admin/product/createProduct')->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !']);
        //                 }
        //             $product_gallery->product_gallery = $file->getClientOriginalName();
        //             $product_gallery->product_id = $product_id;
        //             $file->move("img/gallery", $file->getClientOriginalName());
        //             $product_gallery->save();
        //         }
        //     }
        // }

        // return json_decode($p, 'content');
        return redirect()->action('ProductController@index')->with(['flash_level' => 'success', 'flash_message' => 'Created Successfully !']);
    }


    public function update($id){
        $p = Product::withTrashed()->find($id);
        $cates = Product_type::all();
        $brand = Brand::all();

        return view('admin.product.update', ['p'=>$p ,'c'=>$cates , 'b'=>$brand]);
    }

    public function postUpdate(Request $request, $id){


        // $this->validate(
        //     $request,
        //     [
        //         'prodName'      => 'bail|required|unique:Products,product_name|regex:/^[a-zA-Z]{2,}/i|max:255',
        //         'prodPrice'     => 'required',
        //         'prodCate'      => 'bail|required|not_in:0',
        //         'prodBrand'     => 'bail|required|not_in:0',
        //         'prodWarranty'  => 'required',
        //         'shortDesc'     => 'required',
        //         'longDesc'      => 'required',
        //     ],
        //     [
        //         'prodName.required'            => 'Product title can not be blank !',
        //         'prodName.unique'              => 'Product title has already existed !',
        //         'prodName.regex'               => 'Product title has 2 character and must be string, can not start with number !',
        //         'prodName.min'                 => 'Product title has min 3 characters !',
        //         'prodName.max'                 => 'Product title has max 255 characters !',
        //         'prodPrice.required'           => 'Price can not be blank !',
        //         'prodCate.required'            => 'Please choose one of them !',
        //         'prodBrand.required'           => 'Please choose one of them !',
        //         'prodWarranty.required'        => 'Warranty Period can not be blank !',
        //         'shortDesc.required'           => 'Short Description can not be blank !',
        //         'longDesc.required'            => 'Long Description can not be blank !',
        //     ]
        // );

        $p = Product::withTrashed()->find($id);
        $p->product_name        = $request->prodName;
        $p->price               = $request->prodPrice;
        $p->brand_id            = $request->prodBrand;
        $p->product_types_id    = $request->prodCate;
        $p->exp_date            = $request->prodWarranty;
        $p->short_description   = trim($request->shortDesc);
        $p->long_description    = trim($request->longDesc);
        $p->product_unit        = trim($request->prodUnit);
        $p->product_quantity    = trim($request->prodQuantity);
        $p->sold_out            = $request->sollOut;

        if ($request->hasFile('prodImg')) {
            $file = $request->file('prodImg');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/product/update/".$id)->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/feature/", $imageName);
            $p->image = $imageName;
        } else {
            $imageName = "";
        }

        if ($p->trashed() && $request->sts_cd =="A") {
            $p->restore();
        }
        if (!$p->trashed() && $request->sts_cd =="D") {
            $p->delete();
        }

        $p->save();

        // Function gallery upload
        // $product_id = $p->id;
        // if($request->hasFile('galleryimg')){
        //     foreach ($request->file('galleryimg') as $file) {
        //         $product_gallery = new Gallery();
        //         if (isset($file)) {
        //             $ext   = $file->getClientOriginalExtension();
        //                 if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
        //                     return Redirect('admin/product/createProduct')->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !']);
        //                 }
        //             $product_gallery->product_gallery = $file->getClientOriginalName();
        //             $product_gallery->product_id = $product_id;
        //             $file->move("img/gallery", $file->getClientOriginalName());
        //             $product_gallery->save();
        //         }
        //     }
        // }

        // return json_decode($p, 'content');
        return redirect()->action('ProductController@index')->with(['flash_level' => 'success', 'flash_message' => 'Updated Successfully !']);
    }

    // Function link to update page
    public function detail($id)
    {
        $pro = Product::withTrashed()->join('product_types', 'products.product_types_id', '=', 'product_types.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('products.id', $id)
            ->select('product_types.type_name', 'brands.brand_name', 'products.*')->first();
        $product = Product::find($id);
        // $galleryFea = Gallery::where('product_id', $id)->get();
        // $galleryThum = Gallery::where('product_id', $id)->get();
        return view('admin.product.details', compact('pro','product'));
    }

    public function delete($id){
        $p = Product::find($id)->delete();
        return redirect()->action('ProductController@index');
    }


}
