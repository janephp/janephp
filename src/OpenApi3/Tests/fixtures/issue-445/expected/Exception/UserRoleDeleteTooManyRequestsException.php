<?php

namespace PicturePark\API\Exception;

class UserRoleDeleteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}