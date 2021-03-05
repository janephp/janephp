<?php

namespace PicturePark\API\Exception;

class ShareSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}