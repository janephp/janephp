<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}