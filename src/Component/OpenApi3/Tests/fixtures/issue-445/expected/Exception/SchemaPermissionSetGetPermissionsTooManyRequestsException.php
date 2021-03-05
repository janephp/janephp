<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetGetPermissionsTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}