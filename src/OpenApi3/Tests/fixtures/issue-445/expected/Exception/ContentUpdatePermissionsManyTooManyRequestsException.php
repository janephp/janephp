<?php

namespace PicturePark\API\Exception;

class ContentUpdatePermissionsManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}