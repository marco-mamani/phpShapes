<?php

namespace App; 

class Square extends GeometricShape implements ShapeInterface {

    private $edge;

    public function __construct(array $params = []) {
        $this->edge = $params[0];
    }

    public function getPerimeter(): float {
        return 4 * $this->edge;
    }
    
    public function getArea(): float {
        return $this->edge * $this->edge;
    }

}