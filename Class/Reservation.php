<?php

namespace Class;

use Class\Enums\OfficeStatus;

class Reservation
{
    public OfficeStatus $status;

    public function __construct()
    {
        // echo Reservation::APPROVAL_PENDING;
        // echo self::APPROVAL_PENDING;
        // $this->status = self::APPROVAL_PENDING;
        $this->status = OfficeStatus::APPROVAL_PENDING;

    }
}