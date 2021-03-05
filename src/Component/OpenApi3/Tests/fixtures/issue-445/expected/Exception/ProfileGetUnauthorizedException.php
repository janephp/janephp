<?php

namespace PicturePark\API\Exception;

class ProfileGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}