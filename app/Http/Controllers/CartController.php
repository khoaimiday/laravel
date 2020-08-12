<?php

namespace App\Http\Controllers;

use App\Cart;
use DB;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('user.cart.cartindex')->with(['products' => $products]);
    }

    public function AddCart(Request $req, $id)
    {
        // $req->session()->forget('Cart');
        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);

            $req->session()->put('Cart', $newCart);
        }
        return view('user.cart.cartindex');
    }

    public function DeleteItemCart(Request $req, $id)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if (count($newCart->products) > 0) {
            $req->session()->put('Cart', $newCart);
        } else {
            $req->session()->forget('Cart');
        }
        return view('user.cart.cartindex');
    }

    public function ListOrder()
    {
        return view('user.cart.cartlist');
    }

    public function DeleteListItemCart(Request $req, $id)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if (count($newCart->products) > 0) {
            $req->session()->put('Cart', $newCart);
        } else {
            $req->session()->forget('Cart');
        }
        return view('user.cart.cartlist-detail');
    }

    public function minusItem(Request $req, $id)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->minusItem($id);
        $req->session()->put('Cart', $newCart);
        return view('user.cart.cartlist-detail');
    }
    public function plusItem(Request $req, $id)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->plusItem($id);
        $req->session()->put('Cart', $newCart);
        return view('user.cart.cartlist-detail');
    }

    public function updateItem(Request $req, $id, $quantity)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->updateItem($id, $quantity);
        $req->session()->put('Cart', $newCart);
        return view('user.cart.cartlist-detail');
    }

    public function saveCart(Request $req)
    {
        foreach ($req->data as $item) {
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->updateItem($item["key"], $item["value"]);
            $req->session()->push('Cart', $newCart);
        }
        // return view('user.cart.cartlist-detail');
    }

    public function deleteCart(Request $req)
    {
        foreach ($req->data as $item) {
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->DeleteItemCart($item["key"]);
            if (count($newCart->products) > 0) {
                $req->session()->put('Cart', $newCart);
            } else {
                $req->session()->forget('Cart');
            }
        }
        // return view('user.cart.cartlist-detail');
    }
}
