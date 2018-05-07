<?php namespace Util;
class Date
{
    private $day, $month, $year;
    private static $MONTHS= array('jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'  );

    private function __construct($day = 1, $month = 1, $year = 2018)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;


    }

    public static function make($day = 1, $month = 1, $year = 2018){

         return new self($day, $month, $year);
    }


    public function getDay(): int
    {
        return $this->day;
    }

    public function changeDay(int $day)
    {
        return new self($day,$this->month, $this->year);
    }


    public function getMonth(): int
    {
        return $this->month;
    }

    public function changeMonth(int $month)
    {
        return new self($this->day,$month, $this->year);
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function changeYear(int $year)
    {
        return new self($this->day,$this->month, $year);
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


