<?php

class Date
{
    private $day, $month, $year;
    private static $MONTHS = array('jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');

    public function __construct($day = 1, $month = 1, $year = 2018)
    {
        $this->setDay($day);
        $this->setMonth($month);
        $this->setYear($year);
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function setDay(int $day)
    {
        $this->day = $day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setMonth(int $month)
    {
        $this->month = $month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }

    public function print()
    {
        print($this->day . '/' . $this->month . '/' . $this->year . "\n");
    }

    public function printMonth()
    {
        print($this->day . '/' . self::$MONTHS[($this->month) - 1] . '/' . $this->year . "\n");
    }
}


