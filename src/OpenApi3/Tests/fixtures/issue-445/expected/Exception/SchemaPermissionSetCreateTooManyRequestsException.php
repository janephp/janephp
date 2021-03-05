<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetCreateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}