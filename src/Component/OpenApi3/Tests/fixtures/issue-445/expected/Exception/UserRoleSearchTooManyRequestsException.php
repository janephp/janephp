<?php

namespace PicturePark\API\Exception;

class UserRoleSearchTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}