<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PageController extends Controller
{
    public function adminIndex()
    {
        $userCount = User::count();
        $productCount = Product::count();
        $orderCount = Order::count();
        $cartCount = Cart::count();
        $feedCount = Feedback::count();

        return view('admin.index', compact('userCount', 'productCount', 'orderCount', 'cartCount', 'feedCount'));
    }

    
}
