<?php

namespace PicturePark\API\Exception;

class UserUpdateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}