<?php

use Punctual\Cronjob;

class CronjobTest extends \PHPUnit_Framework_TestCase
{
    public function testWithEnvironment()
    {
        $j = new Cronjob();
        $obj = $j->withEnvironment(array('test' => 'value', 'FOO' => 'bar'));
        $this->assertInstanceOf('Punctual\Cronjob', $obj, 'Fluent interface should return an object of $this');

        $output = $j->toString();
        $this->assertTrue(strpos($output, 'TEST=value') !== false, 'Lower case environment vars should have been uppercased');
        $this->assertTrue(strpos($output, 'FOO=bar') !== false, 'multiple environment variables should have been present but were not');

        $regex = "`[A-z]+=[A-z] [A-z]+=[A-z]`";
        $this->assertTrue(preg_match($regex, $output), 'String should match test regular expression ' . $regex);

    }

}
