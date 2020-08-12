<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $newProduct = Product::orderBy('created_at','desc')->limit(4)->get();
       $soldProduct = Product::orderBy('sold_out', 'desc')->limit(4)->get();
        return view('home', compact('newProduct', 'soldProduct'));
    }
    public function login()
    {
        return view('login');

    }
    public function contact()
    {
        return view('user.contact.index');

    }
    public function FAQ()
    {
        return view('user.FAQ.index');
    }
    public function infomation($id)
    {
        $users = User::find($id);
        return view('home');

    }
}

