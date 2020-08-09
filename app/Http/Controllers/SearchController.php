<?php

namespace App\Http\Controllers;

use App\Product_type;
use App\Product;
use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\Collection;

class SearchController extends Controller
{
    public function filterCategories($id){
        // $cate = Product_type::where('id', $id)->first();
        $products = Product::where('product_type_id', $id)->paginate(12);
        return view('user.product.index', compact('products'));
    }

    public function searchByFilter(Request $request){
        $brand      = $request->brand;
        $sortBy     = $request->sortBy;
        $fromPrice  = $request->fromPrice;
        $toPrice    = $request->toPrice;


    $builder = Product::query();
    // If the category is selected
    if($request->has('brand')) {
        $builder->whereIn('brand_id',$brand);
    }

    // // If the price input
    if($request->has(['fromPrice', 'toPrice']) && $request->toPrice != 0){
        $builder->whereBetween('price', [$fromPrice, $toPrice]);
    }


    // If the sort selected
    if($request->has('sortBy')){
       switch ($sortBy) {
            case '1':
                $builder->orderBy('price');
            break;
            case '2':
                $builder->orderBy('price','desc');
            break;
            case '3':
                $builder->orderBy('product_name');
            break;
            case '4':
                $builder->orderBy('product_name','desc');
            break;
       }
    }
    $products = $builder->paginate(12);

        return view('user.product.index', compact('products'));
    }

}


