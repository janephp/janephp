<?php

namespace PicturePark\API\Exception;

class DisplayValueRerenderUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}