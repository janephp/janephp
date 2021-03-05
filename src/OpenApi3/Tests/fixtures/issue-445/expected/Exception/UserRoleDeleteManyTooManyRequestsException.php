<?php

namespace PicturePark\API\Exception;

class UserRoleDeleteManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}