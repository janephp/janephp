<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetGetManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}