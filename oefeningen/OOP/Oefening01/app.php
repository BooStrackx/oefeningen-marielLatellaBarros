<?php
require_once 'vendor/autoload.php';

use tools\Broom;
use workers\Handyman;

$broom = new Broom();
$handyman = new Handyman($broom);

$handyman->work();
