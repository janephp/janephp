<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetTransferOwnershipManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}