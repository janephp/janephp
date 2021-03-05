<?php

namespace PicturePark\API\Exception;

class UserLockManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}