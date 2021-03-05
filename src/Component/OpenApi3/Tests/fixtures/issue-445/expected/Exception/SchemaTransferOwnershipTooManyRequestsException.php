<?php

namespace PicturePark\API\Exception;

class SchemaTransferOwnershipTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}