<?php

/* BEGIN ANSWER SECTION */

require_once("Programmer.php");

$regularProgrammer = new Programmer();
echo $regularProgrammer->getGreeting();

/*
* If only you could make a CoolProgrammer that
* had everything the regular Programmer had...
* just cooler...
*/
$obj = new getGreeting('Hey Dude');//object of class programmer "Parent
$obj -> display();                 //invoked display method
                                   //which is beging inherited inside programmer class
                               
/* END ANSWER SECTION */
