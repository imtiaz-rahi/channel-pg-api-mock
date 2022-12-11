<?php

use App\Traits\Nanoseconds;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    use Nanoseconds;

    public function testIsoMilitime() {
        $d = new DateTime();
        echo $d->format("Y-m-d H:i:s.v"); // v : Milliseconds
        echo "\n";
//        print($this->nanotime());
        print($this->isoMilitime());
    }
}
