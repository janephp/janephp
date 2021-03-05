<?php

namespace PicturePark\API\Exception;

class UserInviteManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}