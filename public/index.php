<?php

namespace Class;
 
require ('./vendor/autoload.php');


$officeReservation = new OfficeReservation("Reservation du 30 janvier");

var_dump($officeReservation::getCount());