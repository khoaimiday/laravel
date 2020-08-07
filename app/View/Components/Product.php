<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Model;


class Product extends Component
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $image;
    public $exp_date;
    public $product_info;
    public $product_unit;
    public $product_quantity;
    public $product_use;
    public $product_type;
    public $type_name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->id = $product['id'];
        $this->name = $product['product_name'];
        $this->price = $product['price'];
        $this->description = $product['short_description'];
        $this->image = $product['image'];
        $this->exp_date = $product['exp_date'];
        $this->product_info = $product['product_info'];
        $this->product_unit = $product['product_unit'];
        $this->product_quantity = $product['product_quantity'];
        $this->product_use = $product['product_use'];
        $this->product_type = $product['product_type_id'];
        $this->type_name = $product['type_name'];
        $this->product_brand = $product['brand_id'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product');
    }
}
