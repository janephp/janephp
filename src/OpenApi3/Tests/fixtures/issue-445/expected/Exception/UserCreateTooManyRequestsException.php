<?php

namespace PicturePark\API\Exception;

class UserCreateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}