<?php

namespace PicturePark\API\Exception;

class SchemaGetReferencedTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}