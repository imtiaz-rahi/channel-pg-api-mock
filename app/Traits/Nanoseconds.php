<?php

namespace App\Traits;

use DateTime;

trait Nanoseconds
{

    public function isoMilitime(): string
    {
        echo "Server timezone:" . date_default_timezone_get() . "\n";
//        $dt = DateTime::createFromFormat('U.u', microtime(true));
//        return $dt->format("Y-m-d H:i:s.v");
        date_default_timezone_set('Asia/Dhaka');
        $d = new Datetime();
        return $d->format("Y-m-d H:i:s.v O");
    }
}
