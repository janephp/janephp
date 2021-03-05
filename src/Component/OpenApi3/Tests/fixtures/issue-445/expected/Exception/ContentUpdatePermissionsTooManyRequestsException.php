<?php

namespace PicturePark\API\Exception;

class ContentUpdatePermissionsTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}