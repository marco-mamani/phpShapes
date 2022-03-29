<?php

namespace App;

class Circle extends GeometricShape implements ShapeInterface {

    private $radius;
    
    public function __construct(array $params = []) {
        $this->radius = $params[0];
    }

    public function getPerimeter(): float {
        return 2 * $this->PI * $this->radius;
    }
    
    public function getArea(): float {
        return $this->PI * ($this->radius * $this->radius);
    }

}