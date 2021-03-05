<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetDeleteManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}