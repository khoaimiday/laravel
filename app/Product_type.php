<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product_type extends Model
{
    use SoftDeletes;

    protected $table="product_types";

    public $fillable =['id' , 'type_name', 'type_image' , 'description'];
    public $timestamps = true; // Force to have
    public $incrementing = true; // Force to have
    public function roleProduct(){
        return $this->hasMany(Product::class);
    }

    protected $dates = ['deleted_at'];
}
