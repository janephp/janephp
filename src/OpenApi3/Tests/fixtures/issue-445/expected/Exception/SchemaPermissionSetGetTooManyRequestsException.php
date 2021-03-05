<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}