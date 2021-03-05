<?php

namespace PicturePark\API\Exception;

class UserInviteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}