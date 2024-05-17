<?php

require_once 'vendor/autoload.php';

use App\Database\DbConnect;


$DbConnect = DbConnect::getInstance();
var_dump($DbConnect);

$dbConnect2 = DbConnect::getInstance();
var_dump($DbConnect2);