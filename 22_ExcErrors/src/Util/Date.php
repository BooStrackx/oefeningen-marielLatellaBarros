<?php namespace Util;


use Date\DateException;

class Date
{
    private $day, $month, $year;
    private static $MONTHS= array('jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'  );

    public function __construct($day = 1, $month = 1, $year = 2018)
    {
        try {
            $this->setDay($day);
            $this->setMonth($month);
            $this->setYear($year);
        } catch (DateException $dateException) {
            throw new DateException ("wrong argument\n",0,$dateException);
        }
    }

    public function setDay(int $day)
    {
        if ($day < 1 || $day > 31 || is_null($day)) {
            throw new DateException("date must be between 1 and 31\n");
        } else {
            $this->day = $day;
        }
    }

    public function setMonth(int $month)
    {
        if ($month < 1 || $month > 12) {
            throw new DateException("month must be between 1 and 12\n");
        } else {
            $this->month = $month;
        }
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function print()
    {
        print($this->day . '/' . $this->month . '/' . $this->year . "\n");
    }

    public function printMonth()
    {
        print($this->day . '/' . self::$MONTHS[($this->month)-1] . '/' . $this->year . "\n");
    }
}
