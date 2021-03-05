<?php

namespace PicturePark\API\Exception;

class SchemaGetIndexFieldsTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}