<?php
class CartItem{
    private Product $product;
    private int $quantity;

    // cartItem constructor
    public function __construct(Product $product, int $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    //setter and getter for product property
    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        return $this->product;
    }

    //setter and getter fo Quantity property
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    

    
    
}







?>