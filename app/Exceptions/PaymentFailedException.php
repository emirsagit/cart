<?php

namespace App\Exceptions;

use Exception;

class PaymentFailedException extends Exception
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }


    public function render($request)
    {
        return response($this->message, 406);
    }
}
