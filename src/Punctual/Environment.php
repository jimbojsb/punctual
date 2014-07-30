<?php
namespace Punctual;

class Environment implements \ArrayAccess
{
    protected $envVars = array();

    public function __construct(array $envVars = array())
    {
        $this->envVars = $envVars;
    }

    public function toString()
    {
        $variables = array();
        foreach ($this->envVars as $key => $value) {
            $variables[] = "$key=$value";
        }
        $output = implode(" ", $variables);
        return $output;
    }

    public function __toString()
    {
        return $this->toString();
    }

    public function offsetExists($offset)
    {
        return isset($this->envVars[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->envVars[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->envVars[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->envVars[$offset]);
    }


}