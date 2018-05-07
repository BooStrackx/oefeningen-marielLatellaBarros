
<?php
require_once 'vendor/autoload.php';
use Util\Date;
use Date\DateException;


$day = $_POST['dayInput'];
$month = $_POST['monthInput'];
$year = $_POST['yearInput'];
//$day = 4;
//$month = 2;
//$year = 2018;

try {
    $date = new Date($day, $month, $year);
//    $date->setDay(80);
} catch (DateException $exception) {
    print ($exception->getMessage());
}


//$date->print();
//$date->printMonth();
