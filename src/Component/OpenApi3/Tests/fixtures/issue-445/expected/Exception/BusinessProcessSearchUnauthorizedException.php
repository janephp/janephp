<?php

namespace PicturePark\API\Exception;

class BusinessProcessSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}