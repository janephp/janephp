<?php

namespace PicturePark\API\Exception;

class UserRoleCreateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}