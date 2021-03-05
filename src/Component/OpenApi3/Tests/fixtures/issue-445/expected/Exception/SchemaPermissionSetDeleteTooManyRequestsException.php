<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetDeleteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}