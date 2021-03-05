<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetGetPermissionsManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}