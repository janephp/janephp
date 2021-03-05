<?php

namespace PicturePark\API\Exception;

class UserRoleSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}