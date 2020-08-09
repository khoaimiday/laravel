<?php
namespace App;

class Cart{
    public $products=null;
    public $totalQuantity=0;
    public $totalPrice=0;

    public function __construct($cart){
        if($cart){
            $this->products=$cart->products;
            $this->totalQuantity=$cart->totalQuantity;
            $this->totalPrice=$cart->totalPrice;
        }
    }

    public function AddCart($product, $id){
        $newProduct = ['quantity'=> 0,'price'=>$product->price , 'productInfo'=>$product];
        if($this->products){
            if(array_key_exists($id, $this->products)){
                $newProduct =$this->products[$id];
            }       
        }
        $newProduct['quantity']++;
        $newProduct['price']=$newProduct['quantity']*$product->price;
        $this->products[$id]=$newProduct;
        $this->totalQuantity++;
        $this->totalPrice += $product->price;
    }

    public function DeleteItemCart($id){
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

    public function minusItem($id){
        if ($this->products[$id]['quantity']>1){
            $this->products[$id]['quantity'] = $this->products[$id]['quantity'] - 1;
            $this->totalQuantity--;
            $this->products[$id]['price']=$this->products[$id]['quantity'] * $this->products[$id]['productInfo']->price;
            $this->totalPrice = $this->totalPrice -$this->products[$id]['productInfo']->price;
        } else {
            $this->products[$id]['quantity']=1;
        }
    }
    public function plusItem($id){
        $this->products[$id]['quantity'] = $this->products[$id]['quantity'] + 1 ;
        $this->totalQuantity++;
        $this->products[$id]['price']=$this->products[$id]['quantity'] * $this->products[$id]['productInfo']->price;
        $this->totalPrice = $this->totalPrice +$this->products[$id]['productInfo']->price;
    }

    public function updateItem($id,$quantity){
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];
        if ($quantity>1){
            $this->products[$id]['quantity']=$quantity;
            $this->products[$id]['price']=$quantity * $this->products[$id]['productInfo']->price;    
        }else{
            $this->products[$id]['quantity']=1;           
            $this->products[$id]['price']= $this->products[$id]['productInfo']->price;
        }
        $this->totalQuantity += $this->products[$id]['quantity'];
        $this->totalPrice += $this->products[$id]['price'];
    }
    public function all(){
        
    }
    
}
?>
