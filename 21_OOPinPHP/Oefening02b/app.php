<?php

require_once 'vendor/autoload.php';
use Util\Date;

$date1 = Date::make();
$date2 = Date::make(31,5);
$date3 = Date::make(1,2,2018);

$date1->print();
$date2->print();
$date3->print();

$date4 = $date3->changeDay(1);

$date4->print();
