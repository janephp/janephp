<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetGetManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}