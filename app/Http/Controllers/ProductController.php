<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Faker\Factory;
class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index')->with(['products'=>$products]);
    }

    public function seedProduct(){
        $faker = Faker\Factory::create('vi_VN');
        $products = [];
        $limit = 10;
        for ($i=0; $i < $limit; $i++) {
            $product=[
                'id'=> $faker->unique()->randomDigit,
                'name'=>$faker->name,
                'price'=>$faker->randomDigitNotNull,
                'description'=>$faker->text,
                'content'=>$faker-text,
                'discount'=>$faker->randomDigit,
                'sellCount'=>$faker->randomDigit,
                'dvt'=>'hộp',
                'madeIn'=>$faker->country,
                'useFor'=>$faker->title($gender = 'male'|'female'),
                'image'=>'',
                'ingredient'=>$faker->text,
                'safety'=>$faker->text,
                'brandId'=>$faker->state,
                'groupId'=>$faker->randomDigit,
                'updated_at',
                'created_at',
            ];
            $p = new Product($product);
            $p->save();
        }
        return redirect()->action('ProductController@index');
    }
}
