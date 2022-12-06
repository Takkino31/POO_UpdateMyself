<?php

class Cart
{
    public float $totalPrice; 
    public int $quantity ;
     
    public function __construct(int $quantity,float $totalPrice){
        $this->quantity = $quantity;
        $this->totalPrice = $totalPrice;
    }

    public function getTotalPrice(): float{
        return $this->totalPrice;
    }

    public function setTotalPrice(float $price): float{
        return $this->totalPrice = $price;
    }

    public function discount(float $discount): float{
        return $this->totalPrice -= $this->totalPrice*($discount/100);
    }
}
