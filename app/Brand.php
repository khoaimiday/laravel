<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Brand extends Model
{
    use SoftDeletes;

    protected $table="brands";

    public $fillable =['id' , 'brand_name', 'brand_email' , 'description', 'brand_logo', 'created_at', 'updated_at'];
    public $timestamps = true; // Force to have
    public $incrementing = true; // Force to have
    public function roleProduct(){
        return $this->hasMany(Product::class);
    }

    protected $dates = ['deleted_at'];
}
