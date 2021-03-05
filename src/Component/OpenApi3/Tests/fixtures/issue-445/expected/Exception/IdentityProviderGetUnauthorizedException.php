<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}