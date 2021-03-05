<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetUpdateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}