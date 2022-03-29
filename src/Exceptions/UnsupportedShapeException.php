<?php

// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREA WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES
// /////////////////////////////////////////////////////////////////////////////

namespace App\Exceptions;

class UnsupportedShapeException extends Exceptions {

    protected $message = 'Not supported shape. The only supported shapes are: Circle, Rectangle, and Square.';
    
}