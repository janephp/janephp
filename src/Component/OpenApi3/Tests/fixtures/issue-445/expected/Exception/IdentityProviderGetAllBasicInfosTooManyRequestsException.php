<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetAllBasicInfosTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}