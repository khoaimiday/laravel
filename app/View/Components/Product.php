<?php

namespace App\View\Components;

use Illuminate\View\Component;


class Product extends Component
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->id = $product['id'];
        $this->name = $product['name'];
        $this->price = $product['price'];
        $this->description = $product['description'];
        $this->image = $product['image'];
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
