<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetDeleteManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}