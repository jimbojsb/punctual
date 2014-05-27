<?php

use Punctual\TimeSpec;

class TimeSpecTest extends PHPUnit_Framework_TestCase
{
    public function testEveryXMinutes()
    {
        $t = new TimeSpec();

        $t->every('30 minutes');
        $this->assertEquals('*/30', $t->getMinutes());

        $t->every('30 mins');
        $this->assertEquals('*/30', $t->getMinutes());

        $t->every('5 mins');
        $this->assertEquals('*/5', $t->getMinutes());
    }

    public function testEveryMinute()
    {
        $t = new TimeSpec;
        $t->every('minute');
        $this->assertEquals('*', $t->getMinutes());
    }
}
