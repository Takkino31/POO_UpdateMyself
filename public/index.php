<?php

use Class\CoffeeMachine;
use Class\PremiumCoffeeMachine;

require ('./vendor/autoload.php');

$coffeeMachine  = new CoffeeMachine(1);
$premiumCoffeeMachine  = new PremiumCoffeeMachine(12);
$premiumCoffeeMachine->select('vanilla');