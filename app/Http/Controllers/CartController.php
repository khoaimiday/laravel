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
       // $req->session()->forget('Cart');
        $product=DB::table('products')->where('id',$id)->first();
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product,$id);

            $req->session()->put('Cart',$newCart);
        }
        return view('user.cart.cartindex');
    }
<<<<<<< HEAD
    public function DeleteItemCart(Request $req, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart=new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if(count($newCart->products)>0){
            $req->session()->put('Cart',$newCart);
        }
        else{
            $req->session()->forget('Cart'); 
        }
         return view('user.cart.cartindex');
     }

     public function ListOrder(){
         return view('user.cart.cartlist');
     }
=======

>>>>>>> c5cbed9196dd361291665631b0a1274d7ef2fe4d
}

