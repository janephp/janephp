<?php

namespace PicturePark\API\Exception;

class IdentityProviderUpdateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}