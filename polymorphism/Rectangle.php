
<?php

require_once('Shape.php');

class Rectangle extends Shape {

    private $length = 0;
    private $width = 0;
    
    public function __construct() {
        
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setLength($length) {
        $this->length = $length; 
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->length * $this->width;
    }

    
}
