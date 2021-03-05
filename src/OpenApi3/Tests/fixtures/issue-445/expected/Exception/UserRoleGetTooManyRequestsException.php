<?php

namespace PicturePark\API\Exception;

class UserRoleGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}