<?php

/*require("Logger.php");

$log1 = new Logger();
$log2 = new Logger();
*/

require("LoggerSingleton.php");

$log1 = LoggerSingleton::getInstance();
$log2 = LoggerSingleton::getInstance();

$log1->write("Hi");
$log2->write("There");


