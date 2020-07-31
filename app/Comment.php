<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';
    public $timestamp = false;
    public function cmtProduct(){
        return $this->belongsTo('App\Product','id','cmt_id');
    }
    public function cmtUser(){
        return $this->belongsTo('App\User','id','cmt_id');
    }
}
