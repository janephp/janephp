<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetGetPermissionsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}