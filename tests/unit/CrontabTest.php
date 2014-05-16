<?php

/**
 * Author: Dennis
 * Date: 5/16/14
 */

class CrontabTest extends \PHPUnit_Framework_TestCase
{
    public function testEvery()
    {
        $crontab = Punctual\Crontab();
        $crontab = $crontab->every('tuesday');

        // test fluent interface
        $this->assertInstanceOf(
            'Punctual\Crontab',
            $crontab
        );
    }

    public function testDo()
    {
        $crontab = Punctual\Crontab();
        $crontab = $crontab->do('/bin/false');

        // test fluent interface
        $this->assertInstanceOf(
            'Punctual\Crontab',
            $crontab
        );
    }

    public function testAs()
    {
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    public function testWithEnvironment()
    {
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
