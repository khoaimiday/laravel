<?php

namespace App;
use App\Brand;
use App\Product_type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    // khai báo table tương ứng với model
    protected $table = 'products';
    // khai báo trường khoá chính
    protected $primaryKey = 'id';
    //mặc định khoá chính sẽ tự  động tăng
    public $incrementing = false;
    protected $fillable = ['id', 'product_name', 'price', 'short_description','long_description','image','exp_date','product_info',
                            'product_unit', 'product_quantity', 'product_use', 'product_maintain', 'brand_id', 'product_types_id', 'updated_at', 'created_at' ];

    public function roleBrand(){
        return $this->belongsTo(Brand::class);
    }

    public function roleProductType(){
        return $this->belongsTo(Product_type::class);
    }

    public function roleComment(){
        return $this->hasMany(Comment::class);
    }

    protected $dates = ['deleted_at'];

}

