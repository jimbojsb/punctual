<?php
namespace Punctual;

class TimeSpec
{
    private $minutes;
    private $hours;
    private $days;
    private $months;
    private $weekdays;
    private $years;

    public function every($spec)
    {
        $regexes = array(
            '^([0-6][0-9]{0,1}) (minutes|mins)$' => array('minutes', '*/', 1),
            '^(minute|min)$'                     => array('minutes', '*'),
            '^'
        );

        foreach ($regexes as $timeRegex => $extraction) {
            $matches = array();
            if (preg_match("`$timeRegex`", $spec, $matches)) {
                $val = $extraction[1] . $matches[$extraction[2]];
                $this->{$extraction[0]} = $val;
            }
        }
    }

    public function at()
    {

    }

    public function getDays()
    {
        return $this->days;
    }

    public function getHours()
    {
        return $this->hours;
    }

    public function getMinutes()
    {
        return $this->minutes;
    }

    public function getMonths()
    {
        return $this->months;
    }

    public function getWeekdays()
    {
        return $this->weekdays;
    }

    public function getYears()
    {
        return $this->years;
    }



    public function toString()
    {
        $output = '';
        return $output;
    }

    public function __toString()
    {
        return $this->toString();
    }
}