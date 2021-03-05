<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetDeleteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}