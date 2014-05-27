<?php
namespace Punctual;

class Cronjob
{
    private $timeSpec;
    private $command;
    private $environment = array();

    public function __construct()
    {
        $this->timeSpec = new TimeSpec();
    }

    public function at($spec)
    {
        $this->timeSpec->at($spec);
        return $this;
    }

    public function every($spec)
    {
        $this->timeSpec->every($spec);
        return $this;
    }

    public function toString()
    {
        $output = '';

        $envVars = array();
        foreach ($this->environment as $envVar => $value) {
            $envVars[] = strtoupper($envVar) . '=' . $value;
        }
        $output .= implode(' ' , $envVars);

        $output .= ' ' . $this->command;

        return $output;
    }

    public function run($cmd)
    {
        $this->command = $cmd;
    }

    public function withEnvironment(array $envVars)
    {
        $this->environment = $envVars;
        return $this;
    }

    public function __toString()
    {
        return $this->toString();
    }
}