<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}