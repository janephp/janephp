<?php

namespace PicturePark\API\Exception;

class SchemaPermissionSetSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}