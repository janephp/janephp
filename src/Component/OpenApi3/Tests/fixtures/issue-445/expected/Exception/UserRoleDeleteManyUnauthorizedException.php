<?php

namespace PicturePark\API\Exception;

class UserRoleDeleteManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}