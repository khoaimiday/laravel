<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\Product_type;
use App\Brand;
use App\Http\Controllers\Faker\Factory;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index(){
        $products = (products::all())->paginate(5);

        return view('admin.product.index')->with(['products'=>$products]);
    }


    public function create()
    {
         return view("admin.product.create");
    }


     // CREATE PRODUCT
    public function postCreate(Request $request)
    {
        $products=$request->all();
        $this->validate(
            $request,
            [
                'product_name'      => 'bail|required',
                'price'     => 'required',
                'product_types_id'      => 'bail|required|not_in:0',
                'brand_id'     => 'bail|required|not_in:0',
                'short_description'     => 'required',
                'long_description'      => 'required',
                'image'    => 'required',
            ],
            [
                'product_name.required'            => 'Product title can not be blank !',
                'price.required'           => 'Price can not be blank !',
                'product_types_id.required'            => 'Please choose one of them !',
                'brand_id.required'           => 'Please choose one of them !',
                'short_description.required'            => 'Short Description can not be blank !',
                'long_description'            => 'Long Description can not be blank !',
                'image.required'          => 'image can not be blank !',
            ]
        );

        $p = new products($products);
        $p->id = trim($request->id);
        $p->product_name        = trim($request->product_name);
        $p->price               = trim($request->price);
        $p->brand_id            = trim($request->brand_id);
        $p->product_types_id     = trim($request->product_types_id);
        $p->short_description   = trim($request->short_description);
        $p->long_description    = trim($request->long_description);


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect("admin/product/createProduct")->with(['flash_level' => 'danger', 'flash_message' => 'You can only upload image with file .jpg | .png | .jpeg !']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("image/product/", $imageName);
            $p->image = $imageName;
        } else {
            $imageName = "null";
        }
        $p->image=$imageName;
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

}
//     public function update($id){
//         $p = Product::find($id);
//         $cates = Product_type::all();
//         // $brand = Brands::all();

//         return view('admin.product.update',
//         [
//             'p'=>$p
//             ,'c'=>$cates
//             // , 'b'=>$brand
//         ]);
//     }

// }
