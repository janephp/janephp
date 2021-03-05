<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetTransferOwnershipTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}