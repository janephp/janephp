<?php

namespace PicturePark\API\Exception;

class DisplayValueGetStatusUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}