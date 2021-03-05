<?php

namespace PicturePark\API\Exception;

class IdentityProviderGetSynchronizableAttributesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}