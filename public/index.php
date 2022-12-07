<?php

use Class\Reservation;
use Class\Enums\OfficeStatus;

require ('./vendor/autoload.php');

// $status = 'en attente';


// if ($status === Reservation::APPROVAL_PENDING) {
//     echo 'en attente !!!';
// }


$reservation = new Reservation();


if (OfficeStatus::APPROVAL_PENDING===$reservation->status) echo 'en attente';
var_dump($reservation);