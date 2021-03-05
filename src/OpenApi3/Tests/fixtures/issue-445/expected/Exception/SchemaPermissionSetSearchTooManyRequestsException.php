<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetSearchTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}