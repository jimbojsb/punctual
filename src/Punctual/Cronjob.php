<?php
namespace Punctual;

class Cronjob
{
    /**
     * @var TimeSpec
     */
    private $timeSpec;
    private $command;
    private $environment;

    public function __construct()
    {
        $this->timeSpec = new TimeSpec();
        $this->environment = new Environment();
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

        $output .= $this->environment->toString();

        $output .= ' ' . $this->command;

        return $output;
    }

    public function run($cmd)
    {
        $this->command = $cmd;
    }

    public function withEnvironment(array $envVars)
    {
        foreach ($envVars as $key => $value) {
            $this->environment[$key] = $value;
        }
        return $this;
    }

    public function __toString()
    {
        return $this->toString();
    }
}