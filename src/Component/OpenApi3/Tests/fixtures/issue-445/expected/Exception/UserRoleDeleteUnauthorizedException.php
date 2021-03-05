<?php

namespace PicturePark\API\Exception;

class UserRoleDeleteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}