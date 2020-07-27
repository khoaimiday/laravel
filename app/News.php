<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table="news";
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps=true;
    protected $fillable=['id','title','content','image','topic','delete_at','created_at','updated_at'];
}
