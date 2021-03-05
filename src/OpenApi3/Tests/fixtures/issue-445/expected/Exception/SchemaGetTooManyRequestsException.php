<?php

namespace PicturePark\API\Exception;

class SchemaGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}