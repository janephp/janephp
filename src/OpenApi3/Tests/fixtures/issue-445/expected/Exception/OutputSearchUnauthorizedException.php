<?php

namespace PicturePark\API\Exception;

class OutputSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}