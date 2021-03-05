<?php

namespace PicturePark\API\Exception;

class SchemaCreateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}