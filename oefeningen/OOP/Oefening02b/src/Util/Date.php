<?php namespace Util;
class Date
{
    private $day, $month, $year;
    private static $MONTHS= array('jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'  );

    private static $instance;
    private function __construct($day = 1, $month = 1, $year = 2018)
    {
        $this->changeDay($day);
        $this->changeMonth($month);
        $this->changeYear($year);

    }
    //TODO: static make() calls constructor to make object
    public static function make(){
//        $instance = new Date();
//        self::$instance = new self;
//        __construct($day = 1, $month = 1, $year = 2018);
        return new self::$instance;
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
        print($this->day . '/' . $this->month . '/' . $this->year);
        echo "<br>";

    }

    public function printMonth()
    {
        print($this->day . '/' . self::$MONTHS[($this->month)-1] . '/' . $this->year);
    }

}


