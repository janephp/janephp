<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetCreateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}