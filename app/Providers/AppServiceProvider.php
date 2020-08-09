<?php

namespace App\Providers;

use App\Brand;
use App\Category;
use App\Customers;
use App\Feedback;
use App\User;
use App\Product;
use App\Product_type;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;


use Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // $productGlobal = Product::join('product_types', 'products.product_type_id', '=', 'product_types.id')
        // ->select('products.*', 'product_types.*')->paginate(12);
        $productType                = Product_type::all();
        $brandGlobal                = Brand::all();
        // $feedbackGlobal           = Feedback::where('feed_status', 1)->get();
        $sttNo                      = 0;


        View::share([
            'productType'        =>  $productType,
            'brandGlobal'           =>  $brandGlobal,
            // 'feedbackGlobal'      =>  $feedbackGlobal,
            // 'productGlobal'         =>  $productGlobal,
            'sttNo'                 =>  $sttNo,
        ]);


        // PANIGATE WITH COLLECTION
        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });

    }
}
