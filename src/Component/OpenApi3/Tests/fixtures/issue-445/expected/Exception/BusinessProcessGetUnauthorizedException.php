<?php

namespace PicturePark\API\Exception;

class BusinessProcessGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}