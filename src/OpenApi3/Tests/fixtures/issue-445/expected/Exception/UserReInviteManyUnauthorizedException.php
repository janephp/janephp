<?php

namespace PicturePark\API\Exception;

class UserReInviteManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}