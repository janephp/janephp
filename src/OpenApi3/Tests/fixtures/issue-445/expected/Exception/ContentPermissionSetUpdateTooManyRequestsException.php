<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetUpdateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}