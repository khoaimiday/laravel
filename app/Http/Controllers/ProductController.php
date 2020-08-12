<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_type;
use App\Brand;
use App\Comment;
use App\Http\Controllers\Faker\Factory;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    // URL : /PRODUCT
    public function index(){
        $products = Product::join('product_types', 'products.product_type_id', '=', 'product_types.id')
        ->select('products.*', 'product_types.type_name')->paginate(12);
        return view('user.product.index',['products'=>$products]);
    }

    // URL : ADMIN/PRODUCT
    public function indexAdmin(){
        $products = Product::withTrashed()->get();
       return view('admin.product.index',['products'=>$products]);
    }

    // URL : ADMIN/PRODUCT/CREATE
    public function create()
    {
        $cates = Product_type::all();
        $brand = Brand::all();
         return view("admin.product.create",['c'=>$cates, 'b'=>$brand]);
    }


    // URL : ADMIN/PRODUCT/POSTCREATE
    public function postCreate(Request $request)
    {

        $this->validate(
            $request,
            [
                'prodName'      => 'bail|required|unique:Products,product_name|regex:/^[a-zA-Z]{2,}/i|max:255',
                'prodPrice'     => 'required',
                'prodCate'      => 'bail|required|not_in:0',
                'prodBrand'     => 'bail|required|not_in:0',
                // 'prodWarranty'  => 'required',
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
                // 'prodWarranty.required'        => 'Warranty Period can not be blank !',
                'shortDesc.required'           => 'Short Description can not be blank !',
                'longDesc.required'            => 'Long Description can not be blank !',
            ]
        );

        $p = new Product();
        $p->product_name        = $request->prodName;
        $p->price               = $request->prodPrice;
        $p->brand_id            = $request->prodBrand;
        $p->product_type_id    = $request->prodCate;
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
            $file->move("img/feature/product/", $imageName);
            $p->image = $imageName;
        } else {
            $imageName = "";
        }

        $p->save();

        return redirect()->action('ProductController@indexAdmin')->with(['flash_level' => 'success', 'flash_message' => 'Created Successfully !']);
    }

    // URL : ADMIN/PRODUCT/UPATE
    public function update($id){
        $p = Product::withTrashed()->findOrFail($id);
        $cates = Product_type::all();
        $brand = Brand::all();

        return view('admin.product.update', ['p'=>$p ,'c'=>$cates , 'b'=>$brand]);
    }

    // URL : ADMIN/PRODUCT/POSTUPDATE
    public function postUpdate(Request $request, $id){


        // $this->validate(
        //     $request,
        //     [
        //         'prodName'      => 'bail|required|unique:Products,product_name|max:255',
        //         'prodPrice'     => 'required',
        //         'prodCate'      => 'bail|required|not_in:0',
        //         'prodBrand'     => 'bail|required|not_in:0',
        //         'prodWarranty'  => 'required',
        //         'shortDesc'     => 'required',
        //         'longDesc'      => 'required',
        //         'soldOut'       => 'integer|min:0',
        //     ],
        //     [
        //         'prodName.required'            => 'Product title can not be blank !',
        //         'prodName.unique'              => 'Product title has already existed !',
        //         // 'prodName.regex'               => 'Product title has 2 character and must be string, can not start with number !',
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
        $p->product_type_id     = $request->prodCate;
        $p->exp_date            = $request->prodWarranty;
        $p->short_description   = trim($request->shortDesc);
        $p->long_description    = trim($request->longDesc);
        $p->product_unit        = trim($request->prodUnit);
        $p->product_quantity    = $request->prodQuantity;
        $p->sold_out            = $request->soldOut;

        if ($request->hasFile('prodImg')) {
            $file = $request->file('prodImg');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/product/update/".$id)->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/feature/product/", $imageName);
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

        return redirect()->action('ProductController@indexAdmin')->with(['flash_level' => 'success', 'flash_message' => 'Updated Successfully !']);
    }

    // URL : ADMIN/PRODUCT/DELETE
    public function delete($id){
        $p = Product::find($id)->delete();
        return redirect()->action('ProductController@index');
    }

    // URL : ADMIN/PRODUCT/DETAILS/{id}
    public function detailAdmin($id)
    {
        $pro = Product::withTrashed()->join('product_types', 'products.product_type_id', '=', 'product_types.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('products.id', $id)
            ->select('product_types.type_name', 'brands.brand_name', 'products.*')->firstOrFail();
        $product = Product::find($id);

        return view('admin.product.details', compact('pro','product'));
    }

    // URL : /PRODUCT/DETAILS/{id}
    public function details($id)
    {
        // $comments = Comment::join('users', 'comments.user_id', '=', 'users.id')
        // ->join('products', 'comments.product_id', '=', 'products.id')
        // ->where('comments.product_id', $id)
        // ->where('comments.status','1')
        // ->orderBy('comments.created_at', 'desc')
        // ->select('users.*', 'products.*', 'comments.*')->get();




        $pro = Product::withTrashed()->join('product_types', 'products.product_type_id', '=', 'product_types.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('products.id', $id)
            ->select('product_types.type_name', 'brands.brand_name', 'products.*')->firstOrFail();

            $product = Product::find($id);
            $cate = Product_type::find($product->product_type_id);
            $cmts= Comment::where('product_id',$id)->latest()->get();
            $sameProduct = Product::where('id','<>',$id)->where('product_type_id', $product->product_type_id)->limit(4)->get();
        return view('user.product.details', compact('pro','cmts','sameProduct','cate'));
    }

}
