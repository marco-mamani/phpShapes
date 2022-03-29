<?php

// /////////////////////////////////////////////////////////////////////////////
// AQUI SE PUEDE MODIFICAR
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
    public static function createShape(string $shape, array $params = []) {
     
        $paramsLength = count($params);

        if ($paramsLength < 1 || $paramsLength > 2) {
            throw new WrongParamCountException();
        }

        switch ($shape) {
            case 'Circle':
                return new Circle($params);
                break;

            case 'Rectangle':
                return new Rectangle($params);
                break;

            case 'Square':
                return new Square($params);
                break;

            default:
                throw new UnsupportedShapeException();
            
        }
    }
}