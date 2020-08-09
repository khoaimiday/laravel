<?php

namespace App;
use App\Cart;
use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Order_details extends Model
{
    use SoftDeletes;

    protected $table = 'order_details';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['id','quantity','price','order_id','product_id','product_name','totalPrice','totalQuantity','created_at','updated_at'];

    // public function orderDetailonProduct(){
    //     return $this->belongsTo('App\Product','product_id');
    // }
}

