<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetAllUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}