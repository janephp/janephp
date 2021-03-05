<?php

namespace PicturePark\API\Exception;

class UserUpdateIdentityProviderManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}