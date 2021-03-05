<?php

namespace PicturePark\API\Exception;

class SchemaGetManyReferencedTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}