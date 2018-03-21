<?php
require 'src/autoload.php';
error_reporting(E_ALL);

use Util\File;
print(File::readFile('ikbestaniet.txt'));
print('done');


set_error_handler('errorHandler');
function errorHandler($errno, $errstr, $file, $line) {
    print("$errstr <br/>");
    exit();
}


error_reporting(E_ALL);
try {
    print(File::readFile('ikbestaniet.txt'));
} catch (Exception $e) {
    print ($e);
}
print ('done');



