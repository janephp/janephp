<?php

namespace PicturePark\API\Exception;

class UserDeleteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}