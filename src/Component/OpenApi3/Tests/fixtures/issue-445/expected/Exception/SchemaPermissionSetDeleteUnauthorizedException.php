<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetDeleteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}