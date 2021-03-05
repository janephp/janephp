<?php

namespace PicturePark\API\Exception;

class UserAssignUserRolesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}