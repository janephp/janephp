<?php

namespace PicturePark\API\Exception;

class UserRoleCreateManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}