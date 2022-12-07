<?php

class Cart
{
     
    public function __construct(
        private int $quantity,
        private float $totalPrice
        ){
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
