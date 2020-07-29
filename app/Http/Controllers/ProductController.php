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
        $products = (Product::all())->paginate(5);

        return view('admin.product.index')->with(['products'=>$products]);
    }


    public function create()
    {
         return view("admin.product.create");
    }

``
     // CREATE PRODUCT
    public function postCreate(Request $request)
    {

        $this->validate(
            $request,
            [
                'prodName'      => 'bail|required|unique:Product,product_title|regex:/^[a-zA-Z]{2,}/i|max:255',
                'prodPrice'     => 'required',
                'prodCate'      => 'bail|required|not_in:0',
                'prodBrand'     => 'bail|required|not_in:0',
                'prodWarranty'  => 'required',
                'shortDesc'     => 'required',
                'longDesc'      => 'required',
                'featureImg'    => 'required',
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
                'shortDesc.required'            => 'Short Description can not be blank !',
                'longDesc.required'            => 'Long Description can not be blank !',
                'featureImg.required'          => 'Feature Image can not be blank !',
            ]
        );

        $p = new Product();
        $p->product_name        = trim($request->prodName);
        $p->price               = trim($request->prodPrice);
        $p->brand_id            = trim($request->prodBrand);
        $p->product_type_id     = trim($request->prodCate);
        $p->exp_date            = trim($request->prodWarranty);
        $p->short_description   = trim($request->shortDesc);
        $p->long_description    = trim($request->longDesc);


        if ($request->hasFile('featureImg')) {
            $file = $request->file('featureImg');
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
        return redirect()->action('ProductController@index')->with(['flash_level' => 'success', 'flash_message' => 'Update Successfully !']);
    }


    public function update($id){
        $p = Product::find($id);
        $cates = Product_type::all();
        // $brand = Brands::all();

        return view('admin.product.update',
        [
            'p'=>$p
            ,'c'=>$cates
            // , 'b'=>$brand
        ]);
    }

}
