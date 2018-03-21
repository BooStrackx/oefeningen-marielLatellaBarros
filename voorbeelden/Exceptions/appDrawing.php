<?php namespace Drawing;
require_once 'src/autoload.php';

use Drawing\Point;
use Drawing\DrawingException;

try {
    $point = new Point(111,1);
} catch (\Exception $exception) {
    print ($exception);
}
