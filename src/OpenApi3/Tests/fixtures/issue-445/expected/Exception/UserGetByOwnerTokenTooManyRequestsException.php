<?php

namespace PicturePark\API\Exception;

class UserGetByOwnerTokenTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}