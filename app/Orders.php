<?php

namespace App;
use App\Cart;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Orders extends Model
{
    use SoftDeletes;

    protected $table = 'orders';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['id','user_id','order_confirm', 'order_delivery','order_address','order_name','order_phone','order_note',
               'payment','totalPrice','totalQuantity','updated_at', 'created_at', 'deleted_at' ];

    public function OrdersByUser(){
        return $this->belongsTo(User::class);
    }
    public function OrderToOrderdetail(){
        return $this->hasMany('App\Order_detail','id','order_id');
    }
}
