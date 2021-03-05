<?php

namespace PicturePark\API\Exception;

class BusinessProcessGetDetailsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}