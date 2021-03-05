<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetCreateManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}