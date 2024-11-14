<?php

namespace Examen\Exceptions;

class WrongCredentialsException extends \Exception
{
    public function __construct($message = "Wrong Credentials", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}