<?php

class Product
{
    private $id;
    private $name;
    private $price;
    private $availableQuantity;


    public function __construct($id,$name,$price,$availableQuantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
    }

    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    public function addToCart(Cart $cart, $quantity) 
    {
        return $cart->addProduct($this, $quantity); // $this means this object
    }
}