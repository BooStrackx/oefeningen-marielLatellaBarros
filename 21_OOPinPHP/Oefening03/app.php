<?php

require_once ('vendor/autoload.php');
use textnode\TextNode;

$n = TextNode::makeNode("a");
$n->addNode("b");
$n->addNode("c");
$n->printAll();
$n->printTextNodeAt(0);



