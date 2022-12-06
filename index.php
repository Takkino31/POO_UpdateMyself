<?php

require_once('./Class/Cart.php');

$cart = new Cart(2,200);
$cart->setTotalPrice(100);
$cart->discount(10);
var_dump($cart->getTotalPrice());