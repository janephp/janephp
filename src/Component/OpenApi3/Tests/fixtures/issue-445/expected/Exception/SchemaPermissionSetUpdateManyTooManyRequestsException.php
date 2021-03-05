<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetUpdateManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}