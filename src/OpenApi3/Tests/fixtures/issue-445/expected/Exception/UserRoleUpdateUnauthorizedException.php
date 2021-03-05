<?php

namespace PicturePark\API\Exception;

class UserRoleUpdateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}