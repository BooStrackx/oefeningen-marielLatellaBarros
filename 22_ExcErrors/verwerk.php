<?php
require_once 'vendor/autoload.php';

use Util\Date;
use Date\DateException;

$day = $_POST['dayInput'];
$month = $_POST['monthInput'];
$year = $_POST['yearInput'];

//TODO: catch error message from setDay?
try {
    $date = new Date($day, $month, $year);
} catch (DateException $exception) {
    print ($exception->getMessage());
}


//$date->print();
//$date->printMonth();
