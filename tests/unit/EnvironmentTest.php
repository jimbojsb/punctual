<?php
use Punctual\Environment;

class EnvironmentTest extends \PHPUnit_Framework_TestCase
{
    public function testEnvironmentToString()
    {
        $env = new Environment(["ENVVAR" => "test", "ENVVAR2" => "foo"]);
        $expectedString = "ENVVAR=test ENVVAR2=foo";
        $this->assertEquals($expectedString, $env->toString());
        $this->assertEquals($expectedString, $env->__toString(), "__toString() and toString() output should be the same");
    }

    public function testArrayAccess()
    {
        $env = new Environment();
        $env["FOO"] = "bar";
        $this->assertEquals("FOO=bar", $env->toString(), "Array access style setter did not result in data being stored");
    }
}
