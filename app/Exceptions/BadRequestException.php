<?php

namespace App\Exceptions;

class BadRequestException extends BaseException
{
    public function __construct($message = null, $statusCode = 400)
    {
        $message = $message ?? "Bad request";

        parent::__construct($message, $statusCode);
    }
}
