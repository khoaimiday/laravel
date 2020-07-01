<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // khai báo table tương ứng với model
    protected $table = 'products';
    // khai báo trường khoá chính
    protected $primaryKey = 'id';
    //mặc định khoá chính sẽ tự  động tăng
    public $incrementing = false;
    protected $fillable = ['id', 'name', 'price', 'description', 'image', 'updated_at', 'created_at'];
}
