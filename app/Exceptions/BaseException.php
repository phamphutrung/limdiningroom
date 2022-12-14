<?php

namespace App\Exceptions;

use Exception;

abstract class BaseException extends Exception
{
    protected $statusCode = null;
    protected $description = null;
    protected $data = null;
    /**
     * Construct the ApiException
     *
     * @param $description [required] The Exception message to throw.
     * @param int   $statusCode  [required] The Exception code.
     * @param array $data        [optional] The Exception code.
     */
    public function __construct($description = null, $statusCode = null, $data = [])
    {
        $this->data = $data;
        $this->statusCode = $statusCode;
        $this->description = $description;

        parent::__construct($description, $statusCode);
    }

    public function getErrorDescription()
    {
        return $this->getMessage();
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getData()
    {
        return $this->data;
    }
}
