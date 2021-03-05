<?php

namespace PicturePark\API\Exception;

class UserLockTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}