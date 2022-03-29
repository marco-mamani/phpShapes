<?php

// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREA WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES
// /////////////////////////////////////////////////////////////////////////////

namespace App\Exceptions;

class WrongParamCountException extends \Exceptions {
    
    protected $message = 'Wrong number of parameters to build a Geometric Shape object.';

}