<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;
use Session;

class CartController extends Controller
{
    public function index(){
        $products= DB::table('products')->get();
        return view('user.cart.cartindex')->with(['products'=>$products]);
    }
    public function AddCart(Request $req, $id){
        $product=DB::table('products')->where('id',$id)->first();
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product,$id);

            $req->session()->put('Cart',$newCart);
        }
        return view('user.cart.cart',compact('newCart'));
    }
}
