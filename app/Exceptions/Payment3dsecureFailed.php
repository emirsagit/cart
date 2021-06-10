<?php

namespace App\Exceptions;

use Exception;

class Payment3dsecureFailed extends Exception
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }


    public function render()
    {
        return redirect()->away("http://localhost:3000/odeme?failure={$this->message}");
    }
}
