<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';
    public $timestamp = true;
    public function cmtProduct(){
        return $this->belongsTo('App\Product','product_id','id');
    }
    public function cmtUser(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
