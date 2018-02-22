<?php
class Dog extends Mammal{ //extends from the parent class Mammal
    public function __construct(){
        
    }
    public function communicate(); 
    {
       return $fido->communicate('Woof!')  // returns data given at position $key
    }
}