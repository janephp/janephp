<?php

namespace PicturePark\API\Exception;

class ContentUpdatePermissionsManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}