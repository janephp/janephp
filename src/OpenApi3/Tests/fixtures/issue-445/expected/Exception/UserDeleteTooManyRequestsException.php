<?php

namespace PicturePark\API\Exception;

class UserDeleteTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}