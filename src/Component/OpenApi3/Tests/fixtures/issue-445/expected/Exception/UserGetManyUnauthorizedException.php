<?php

namespace PicturePark\API\Exception;

class UserGetManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}