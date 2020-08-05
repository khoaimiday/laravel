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
        $productGlobal = Product_type::find($id)->roleProduct()->paginate(12);
        return view('user.product.index', compact('productGlobal'));
    }

    public function searchByFilter(Request $request){
        $cate    = $request->category;
        $sortBy     = $request->sortBy;
        $fromPrice  = $request->fromPrice;
        $toPrice    = $request->toPrice;

        $products = Product::all();

    // If the category is selected
    if($request->has('category')) {
    $products = $products->intersect(Product::whereIn('id', $cate)->get());
    }

    // If the price input
    if($request->has(['fromPrice', 'toPrice']) && $request->toPrice != 0){
        $products = $products->whereBetween('price', [$fromPrice, $toPrice]);
    }


    // If the sort selected
    if($request->has('sortBy')){
       switch ($request->sortBy) {
            case '1':
                $products = $products->sortBy('price');
            break;
            case '2':
                $products = $products->sortByDesc('price');
            break;
            case '3':
                $products = $products->sortBy('product_name');
            break;
            case '4':
                $products = $products->sortByDesc('product_name');
            break;
       }
    }

    $productGlobal = $products->paginate(12);
        return view('user.product.index', compact('productGlobal'));
    }

}


