<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetDeleteManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}