<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetAllTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}