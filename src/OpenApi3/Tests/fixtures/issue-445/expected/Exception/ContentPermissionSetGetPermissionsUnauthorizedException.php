<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetGetPermissionsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}