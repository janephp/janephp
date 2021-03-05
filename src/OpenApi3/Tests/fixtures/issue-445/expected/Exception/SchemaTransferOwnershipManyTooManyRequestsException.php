<?php

namespace PicturePark\API\Exception;

class SchemaTransferOwnershipManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}