<?php

namespace PicturePark\API\Exception;

class UserRoleUpdateManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}