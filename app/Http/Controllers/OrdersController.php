<?php

namespace App\Http\Controllers;
use App\Cart;
use App\User;
use App\Product;
use Auth;
use Illuminate\Database\Eloquent\Model;
use App\Orders;
use App\Order_details;
use Session;
use Illuminate\Http\Request;

class OrdersController extends Controller 
{
    public function checkOrderLogin(){
        if (Auth::check()){
            $userId=Auth::user()->id;
            $userOrder = User::where('id',$userId)->first();
            return view('user.cart.payment',compact('userOrder'));
        } else {
            return view('auth.login');
        }
    }
    public function checkOrder(Request $rq)
    {
        $this->validate(
            $rq,
            [
                'name' => 'bail|required|max:100',
                'phone' => 'bail|required|min:9|max:12',
                'address' => 'bail|required|max:500',
                'note' => 'bail|max:500',
            ],
            [
                'name.required' => 'Xin vui lòng nhập tên người nhận.',
                'name.max' => 'Tên không quá 100 kí tự.',
                'phone.required' => 'Xin vui lòng nhập số điện thoại người nhận',
                'phone.min' => 'Số điện thoại không nhỏ hơn 9 số.',
                'phone.max' => 'Số điện thoại không quá 12 số.',
                'address.required' => 'Xin vui lòng nhập địa chỉ người nhận.',
                'address.max' => 'Địa chỉ không quá 500 kí tự.',
                'note.max' => 'Ghi chú không quá 500 kí tự',
            ]
        );
            // $orders = $rq->all();
            $userId=Auth::user()->id;
            $userOrder = User::where('id',$userId)->first();
            $order = new Orders;
            $order->user_id=$userId;
            $order->order_address=$rq['address'];
            $order->order_phone=$rq['phone'];
            $order->order_name=$rq['name'];
            $order->order_note=$rq['note'];
            $order->order_confirm=0;
            $order->order_delivery=0;
            $order->totalPrice=Session::get('Cart')->totalPrice;
            $order->totalQuantity=Session::get('Cart')->totalQuantity;
            $order->save();
             $newOrder=Orders::where('user_id',$userId)->first();
            $productCarts=Session::get('Cart')->all();
            $products=$rq->session()->get('Cart');
          
            if ($products != null){
                foreach($products->products as $product) {
                $orderDetail = new Order_details();
                $orderDetail->quantity = $product['quantity'];
                $orderDetail->price = $product['price'];
                $orderDetail->order_id = $newOrder->id;
                $orderDetail->product_id = $product['productInfo']->id;
                $orderDetail->product_name = $product['productInfo']->product_name;   
                $orderDetail->save(); 
               } 
               $orderDetails = Order_details::where('order_id',$newOrder->order_id)->get();
               $totalPrice = Session::get('Cart')->totalPrice;
               $rq->session()->forget('Cart');
               return view('user.cart.orderconfirm', compact('order', 'orderDetails'));
            }
        return view('user.cart.cartlist');
    }
    //ADMIN
    public function index()
    {
        $orders = Orders::where('order_delivery',0)->latest()->get();
        return view('admin.order.index')->with(['orders'=>$orders]);
    }

    public function close()
    {
        $orders= Orders::where('order_delivery','<>',0)->latest()->get();
        return view('admin.order.orderComplete')->with(['orders'=>$orders]);
    }

    public function store(Request $request)
    {
        //
    }
    public function detail($id)
    {
        $order= Orders::where('id',$id)->first();
        $orderDetails=Order_Details::where('order_id',$id)->get();
        return view('admin.order.detail',compact('order','orderDetails'));
    }

    public function update($id)
    {
        $order= Orders::where('id',$id)->first();
        $orderDetails=Order_Details::where('order_id',$id)->get();
        return view('admin.order.update',compact('order','orderDetails'));
    }
    public function postUpdate(Request $rq, $id)
    {
        $or=$rq->all();
        $order=Orders::where('id',$id)->first();
            $order->order_confirm=$or['order_confirm'];
            $order->order_delivery=$or['order_delivery'];
            $order->order_phone=$or['order_phone'];
            $order->order_address=$or['order_address'];
            $order->order_note=$or['order_note'];
            $order->save();
            return redirect()->action('OrdersController@index');
    }
    public function tempdelete($id)
    {
        Orders::where('id',$id)->update([
            'order_delivery'=>2
        ]);
        return back()->with('tempdelete_success','Huỷ đơn hàng thành công!');
    }

    public function undo($id) {
        Orders::where('id', $id)->update([
            'order_delivery'=> 0
        ]);
        return back()->with('undo_success', 'Đã hoàn tác đơn hàng!');
    }
    public function delete($id)
    {   
        $orderDetails = Order_details::where('order_id', $id)->get();
        foreach ($orderDetails as $orderDetail) {
            Order_details::where('id', $orderDetail->id)->delete();
        }
        Orders::where('id',$id)->delete();
        return back()->with('delete_success','Xoá đơn hàng thành công!');
    }
}
