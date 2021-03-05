<?php

namespace PicturePark\API\Exception;

class BusinessProcessCreateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}