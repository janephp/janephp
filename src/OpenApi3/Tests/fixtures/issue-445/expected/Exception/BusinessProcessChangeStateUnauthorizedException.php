<?php

namespace PicturePark\API\Exception;

class BusinessProcessChangeStateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}