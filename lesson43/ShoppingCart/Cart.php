<?php 

class Cart {

    public $items = [];

    public function addProduct(Product $product, $quantity)
    {
        // 1) if product exist in $this->items, change qty
        // 2) if product not exist create CartItem and add to $this->items

        // if(isset($this->items[$product->getId()])) {
        //     $cartItem = $this->items[$product->getId()];
        //     $newQuantity = $cartItem->getQuantity() + $quantity;
        //     $cartItem->setQuantity($newQuantity);

        // } else {
        //     $cartItem = new CartItem($product,$quantity);
        //     $this->items[$product->getId()] = $cartItem;
        // }

        $cartItem = isset($this->items[$product->getId()]) ? $this->items[$product->getId()] : null ;

        if($cartItem) {
            $cartItem->setQuantity( $cartItem->getQuantity() + $quantity);
        } else {
            $cartItem = new CartItem($product,$quantity);
            $this->items[$product->getId()] = $cartItem;

            return $cartItem;
        }
        // no return -> null
    }

    public function getTotalQuantity()
    {
        $sum = 0;
        foreach($this->items as $item) { // $item CartItem
            $sum += $item->getQuantity();
        }
        return $sum;
    }

    public function getTotalSum() 
    {
        $total = 0;
        foreach ($this->items as $item) { // $item CartItem
            $total += $item->getQuantity() * $item->getProduct()->getPrice();
        }

        return $total;
    }

    public function removeProduct(Product $product)
    {
        unset($this->items[$product->getId()]);
    }
}