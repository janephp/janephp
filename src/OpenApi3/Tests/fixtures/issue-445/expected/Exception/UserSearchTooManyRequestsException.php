<?php

namespace PicturePark\API\Exception;

class UserSearchTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}