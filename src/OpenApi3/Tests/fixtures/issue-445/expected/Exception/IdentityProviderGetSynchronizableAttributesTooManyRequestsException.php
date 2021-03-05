<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetSynchronizableAttributesTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}