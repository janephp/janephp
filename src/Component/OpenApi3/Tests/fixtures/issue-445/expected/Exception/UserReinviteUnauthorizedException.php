<?php

namespace PicturePark\API\Exception;

class UserReinviteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}