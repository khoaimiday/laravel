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
        $cate = Product_type::find($id);
        return view('user.product.prod_by_cate', compact('products','cate'));
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

    public function searchHome(Request $request){
        return view('user.searchajax');
    }



    function getSearchAjax($query)
    {
        $output ='';

            $data = Product::where('product_name', 'LIKE', "%{$query}%")->get();
            $output = ' <table class="table table-striped table-hover table-condensed">';
            foreach($data as $row)
            {
                $output .= '
                        <tr class="inputHTLM" href="'.url('product/detail/'.$row->id).'">
                            <td><img src="' . asset('img/feature/product/'.$row->image) . '" style="width:50px"/></td>
                            <td style="line-height: 45px"><a href="'. url('product/detail/'.$row->id) .'">'.$row->product_name.'</a></td>
                            <td style="line-height: 45px">'.$row->price. '</td>
                        </tr>
                    ';
            }
            $output .= '</table>';
            echo $output;
    }
}



