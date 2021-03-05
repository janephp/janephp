<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetCreateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}