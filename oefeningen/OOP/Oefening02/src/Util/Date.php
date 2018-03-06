<?php namespace Util;
class Date
{
    private $day, $month, $year;
    private static $MONTHS= array('jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'  );

    public function __construct($day = 1, $month = 1, $year = 2018)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;

    }

    /**
     * @return int
     */
    public function getDay(): int
    {
        return $this->day;
    }

    /**
     * @param int $day
     */
    public function setDay(int $day): void
    {
        $this->day = $day;
    }

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @param int $month
     */
    public function setMonth(int $month): void
    {
        $this->month = $month;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function print()
    {
        print($this->day . '/' . $this->month . '/' . $this->year . '/');
        echo "<br>";

    }

    public function printMonth()
    {
        print($this->day . '/' . self::$MONTHS[($this->month)+1] . '/' . $this->year . '/');
    }




}


