<?php

namespace PicturePark\API\Exception;

class LiveStreamSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}