<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetDeleteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}