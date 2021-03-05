<?php

namespace PicturePark\API\Exception;

class UserLockManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}