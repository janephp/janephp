<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetCreateManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}