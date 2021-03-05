<?php

namespace PicturePark\API\Exception;

class UserLockUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}