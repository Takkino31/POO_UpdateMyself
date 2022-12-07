<?php
require ('./vendor/autoload.php');

// require_once('./Class/Cart.php');
// require_once('./Class/Paypal/Payment.php');
// require_once('./Class/Stripe/Payment.php');
// require_once('./Class/Users/User.php');

// $cart = new Cart(2,200);
// $cart->setTotalPrice(100);
// $cart->discount(10);
// var_dump($cart->getTotalPrice());


// spl_autoload_register(function($class){
//     $path = dirname(__DIR__).'/'.str_replace('\\','/',$class). '.php';
//     if (file_exists($path)) {
//         require($path);
//     }
//     var_dump($path);
// });

use \Class\Paypal\Payment;

$paymentPaypal = new Payment();
$paymentStripe = new Class\Stripe\Payment();


var_dump($paymentPaypal);
var_dump($paymentStripe);