<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}