<?php

namespace PicturePark\API\Exception;

class UserRoleCreateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}