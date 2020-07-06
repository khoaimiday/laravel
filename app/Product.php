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
    protected $fillable = ['id', 'name', 'price', 'description','content','discount','sellCount','dvt',
                            'madeIn', 'useFor', 'image', 'ingredient', 'safety', 'brandId', 'groupId','updated_at', 'created_at',
                            ];
}
