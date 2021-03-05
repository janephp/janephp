<?php

namespace PicturePark\API\Exception;

class UserGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}