<?php

require_once ('vendor/autoload.php');
use textnode\TextNode;

$n = TextNode::makeNode("a");
$n->addNode("b");
$n->addNode("c");
$n->printAll();

try {
    $n->printTextNodeAt(2);
} catch (Exception $exception) {
    print $exception->getMessage();
}


