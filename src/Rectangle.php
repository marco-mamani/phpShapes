<?php

namespace App;

class Rectangle extends GeometricShape implements ShapeInterface {

    private $width;
    private $length;

    public function __construct(array $params = []) {
        $this->width = $params[0];
        $this->length = $params[1];
    }

    public function getPerimeter(): float {
        return (2*$this->width) + (2*$this->length);
    }
    
    public function getArea(): float {
        return $this->width * $this->length;
    }

}