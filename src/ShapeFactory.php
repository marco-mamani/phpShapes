<?php

// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREA WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES
// /////////////////////////////////////////////////////////////////////////////

namespace App;

use App\Exceptions\UnsupportedShapeException;
use App\Exceptions\WrongParamCountException;

/**
 * Class ShapeFactory
 * @package App
 */
class ShapeFactory
{
    /**
     * Creates a specific GeometricShape object from the given attributes.
     *
     * Usage examples:
     *     ShapeFactory::createShape("Circle", 4)
     *     ShapeFactory::createShape("Rectangle", [3, 5])
     *
     * @param string $shape
     * @param array $params
     * @return mixed
     * @throws WrongParamCountException|UnsupportedShapeException
     */
    public static function createShape(string $shape, array $params = [])
    {
        // ToDo
    }
}