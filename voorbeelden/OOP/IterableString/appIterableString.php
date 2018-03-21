<?php
require_once 'IterableString.php';

$text = new IterableString("abcd");
foreach ($text as $index => $character) {
    print ("$index $character");
    echo "<br/>";
}