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

    public function newsIndex()
    {
        $new1s=News::where('topic','Bệnh thường gặp')->latest()->get();
        // return view('user.news.news')->with(['new1s'=>$new1s]);

        $new2s=News::where('topic','Chăm sóc sức khoẻ')->latest()->get();
        return view('user.news.news')->with(['new1s'=>$new1s,'new2s'=>$new2s]);
    }
}
