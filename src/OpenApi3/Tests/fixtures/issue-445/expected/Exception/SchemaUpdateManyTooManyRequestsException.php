<?php

namespace PicturePark\API\Exception;

class SchemaUpdateManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}