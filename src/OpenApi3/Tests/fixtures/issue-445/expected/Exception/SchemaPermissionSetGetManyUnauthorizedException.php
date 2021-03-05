<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetGetManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}