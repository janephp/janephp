<?php

namespace PicturePark\API\Exception;

class IdentityProviderUpdateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}