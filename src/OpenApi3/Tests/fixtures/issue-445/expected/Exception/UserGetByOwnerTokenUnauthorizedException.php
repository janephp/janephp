<?php

namespace PicturePark\API\Exception;

class UserGetByOwnerTokenUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}