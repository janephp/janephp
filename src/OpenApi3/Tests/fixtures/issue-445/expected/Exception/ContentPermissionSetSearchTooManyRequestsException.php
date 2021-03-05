<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetSearchTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}