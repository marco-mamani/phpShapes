<?php

// /////////////////////////////////////////////////////////////////////////////
// IMPORTANT:
// ESTA CLASE SOLO ES PARA VER
// /////////////////////////////////////////////////////////////////////////////

namespace App;

/**
 * Interface ShapeInterface
 * @package App
 */
interface ShapeInterface
{
    /**
     * Returns the perimeter of the shape
     * @return float
     */
    public function getPerimeter(): float;

    /**
     * Return the area of the shape
     * @return float
     */
    public function getArea(): float;
}