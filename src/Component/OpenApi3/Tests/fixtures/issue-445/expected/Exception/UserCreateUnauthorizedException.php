<?php

namespace PicturePark\API\Exception;

class UserCreateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}