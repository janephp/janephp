<?php

namespace PicturePark\API\Exception;

class SchemaUpdateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}