<?php

namespace PicturePark\API\Exception;

class SchemaSearchTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}