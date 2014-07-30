<?php

use Punctual\Cronjob;

class CronjobTest extends \PHPUnit_Framework_TestCase
{
    public function testWithEnvironment()
    {
        $j = new Cronjob();
        $obj = $j->withEnvironment(array('TEST' => 'value', 'FOO' => 'bar'));
        $this->assertInstanceOf('Punctual\Cronjob', $obj, 'Fluent interface should return an object of $this');

        $output = $j->toString();
        $this->assertTrue(strpos($output, 'FOO=bar') !== false, 'multiple environment variables should have been present but were not');

        $regex = "`[A-Z]+=[A-z]+ [A-Z]+=[A-z]+`";
        $this->assertTrue((bool) preg_match($regex, $output), 'String should match test regular expression ' . $regex);
    }

    public function testFluentInterfaces()
    {
        $j = new Cronjob();
        $obj = $j->every('minute');
        $this->assertInstanceOf('Punctual\Cronjob', $obj);
        $obj = $j->at('midnight');
        $this->assertInstanceOf('Punctual\Cronjob', $obj);

    }

}
