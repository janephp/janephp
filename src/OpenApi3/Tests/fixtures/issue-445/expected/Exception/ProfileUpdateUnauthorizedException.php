<?php

namespace PicturePark\API\Exception;

class ProfileUpdateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}