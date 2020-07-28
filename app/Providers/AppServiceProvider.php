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
        $productGlobal              = Product::all();
        $producttype                = Product_type::all();
        // $brandGlobal                = Brand::all();
        // $feedbackHomepage           = Feedback::where('feed_status', 1)->get();
        $sttNo                      = 0;


        View::share([
            'producttype'        =>  $producttype,
            // 'brandGlobal'           =>  $brandGlobal,
            // 'feedbackHomepage'      =>  $feedbackHomepage,
            'productGlobal'         =>  $productGlobal,
            'sttNo'                 =>  $sttNo,
        ]);

    }
}
