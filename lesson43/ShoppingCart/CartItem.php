<?php

// We need CartItem
// properties $product, $quantity
// Contructor, getter and setter

class CartItem {

    private $product;
    private $quantity;

    public function __construct(Product $product,$quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function setProduct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function increaseQuantity($increament=1)
    {
        // guard case
        if ( $this->getQuantity() + $increament > $this->product->getAvailableQuantity()) {
            throw new Exception("Product quanitty can not be more than ". $this->product->getAvailableQuantity());
        }

        $this->quantity += $increament;
    }

    public function decreaseQuantity($decriment=1)
    {
        // guard case
        if ($this->getQuantity() - $decriment < 1) {
            throw new Exception("Product quanityt can not be less than 1");
        }

        $this->quantity -= $decriment;
    }
}