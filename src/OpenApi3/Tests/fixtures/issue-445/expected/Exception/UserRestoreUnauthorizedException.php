<?php

namespace PicturePark\API\Exception;

class UserRestoreUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}