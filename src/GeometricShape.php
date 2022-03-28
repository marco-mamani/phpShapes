<?php

// /////////////////////////////////////////////////////////////////////////////
// IMPORTANT:
// ESTA CLASE SOLO ES PARA VER NO SE MODIFICA
// /////////////////////////////////////////////////////////////////////////////

namespace App;

/**
 * Class GeometricShape
 * Describes the base class for the shapes
 * @package App
 */
abstract class GeometricShape
{
    /**
     * PI const
     */
    const PI = 3.14;

    /**
     * @return string
     */
    public function getName(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}