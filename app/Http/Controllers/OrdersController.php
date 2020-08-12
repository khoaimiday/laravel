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
        $userId=Auth::user()->id;
        $products=$rq->session()->get('Cart');
        $newOrder=Orders::where('user_id',$userId)->latest()->first(); 
        if($this->validate(
            $rq,
            [
                'name' => 'required|max:100',
                'phone' => 'required|min:10|max:11',
                'address' => 'required|max:500',
                'note' => 'max:500',
            ],
            [
                'name.required' => 'Xin vui lòng nhập tên người nhận.',
                'name.max' => 'Tên không quá 100 kí tự.',
                'phone.required' => 'Xin vui lòng nhập số điện thoại người nhận',
                'phone.min' => 'Số điện thoại không nhỏ hơn 10 số.',
                'phone.max' => 'Số điện thoại không quá 11 số.',
                'address.required' => 'Xin vui lòng nhập địa chỉ người nhận.',
                'address.max' => 'Địa chỉ không quá 500 kí tự.',
                'note.max' => 'Ghi chú không quá 500 kí tự',
            ]
        )) {
          if ($products != null){
            $order = new Orders;
            $order->user_id=$userId;
            $order->order_address=$rq['address'];
            $order->order_phone=$rq['phone'];
            $order->order_name=$rq['name'];
            $order->order_note=$rq['note'];
            $order->order_confirm=0;
            $order->order_delivery=0; 
            $order->totalPrice=$rq->session()->get('Cart')->totalPrice;
            $order->totalQuantity=$rq->session()->get('Cart')->totalQuantity;
            $order->save();     
            foreach($products->products as $product) {
                $orderDetail = new Order_details();
                $orderDetail->quantity = $product['quantity'];
                $orderDetail->price = $product['price'];
                $orderDetail->order_id = $newOrder->id;
                $orderDetail->product_id = $product['productInfo']->id;
                $orderDetail->product_name = $product['productInfo']->product_name;   
                $orderDetail->save(); 
               }    
            $orderDetails = Order_details::where('order_id',$newOrder->id )->get();     
            $rq->session()->forget('Cart');
            return view('user.cart.orderconfirm',compact('newOrder','orderDetails')); 
        } else{
            return redirect()->action('HomeController@index')->with('order_fail','Vui lòng chọn lại sản phẩm!');
        }}  else {
        return redirect()->action('OrdersController@checkOrder')->old();
        }
    }
    

    //ADMIN
    public function index()
    {
        $orders = Orders::where('order_delivery',0)->latest()->get();
        return view('admin.order.index')->with(['orders'=>$orders]);
    }

    public function close()
    {
        $orders= Orders::where('order_delivery',1)->latest()->get();
        $rev=Orders::with('Order_details')->where('order_delivery',1)->sum('totalPrice');
        return view('admin.order.orderComplete')->with(['orders'=>$orders,'rev'=>$rev]);
    }
    public function cancel()
    {
        $orders= Orders::whereIn('order_delivery',[2,3])->latest()->get();
        return view('admin.order.orderDeleted')->with(['orders'=>$orders]);
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
    public function receipt($id)
    {
        $order= Orders::where('id',$id)->first();
        $orderDetails=Order_Details::where('order_id',$id)->get();
        return view('admin.order.receipt',compact('order','orderDetails'));
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
        if($this->validate(
            $rq,
            [
                'order_name' => 'required|max:100',
                'order_phone' => 'required|min:10|max:11',
                'order_address' => 'required|max:500',
                'order_note' => 'max:500',
            ],
            [
                'order_name.required' => 'Xin vui lòng nhập tên người nhận.',
                'order_name.max' => 'Tên không quá 100 kí tự.',
                'order_phone.required' => 'Xin vui lòng nhập số điện thoại người nhận',
                'order_phone.min' => 'Số điện thoại không nhỏ hơn 10 số.',
                'order_phone.max' => 'Số điện thoại không quá 11 số.',
                'order_address.required' => 'Xin vui lòng nhập địa chỉ người nhận.',
                'order_address.max' => 'Địa chỉ không quá 500 kí tự.',
                'order_note.max' => 'Ghi chú không quá 500 kí tự',
            ]
        )) {
        
        $order=Orders::where('id',$id)->first();
            $order->order_confirm=$or['order_confirm'];
            $order->order_delivery=$or['order_delivery'];
            $order->order_phone=$or['order_phone'];
            $order->order_address=$or['order_address'];
            $order->order_note=$or['order_note'];
            $order->save();
            return redirect()->action('OrdersController@index')->with('update_success','Cập nhật đơn hàng thành công!');
         }else{
             return redirect()->action('OrdersController@update');
         }
    }

    public function tempdelete($id)
    {
        Orders::where('id',$id)->update([
            'order_delivery'=>2
        ]);
        return redirect()->action('OrdersController@index')->with('tempdelete_success','Huỷ đơn hàng thành công!');
    }

    public function undo($id) {
        Orders::where('id', $id)->update([
            'order_delivery'=> 0
        ]);
        return redirect()->action('OrdersController@index')->with('undo_success', 'Đã hoàn tác đơn hàng!');
    }
    public function delete($id)
    {   
        $orderDetails = Order_details::where('order_id', $id)->get();
        foreach ($orderDetails as $orderDetail) {
            Order_details::where('id', $orderDetail->id)->delete();
        }
        Orders::where('id',$id)->delete();
        return redirect()->action('OrdersController@close')->with('delete_success','Xoá đơn hàng thành công!');
    }
}
