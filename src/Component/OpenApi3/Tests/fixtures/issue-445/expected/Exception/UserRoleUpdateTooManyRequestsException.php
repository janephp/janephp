<?php

namespace PicturePark\API\Exception;

class UserRoleUpdateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}