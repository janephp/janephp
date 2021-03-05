<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetUpdateManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}