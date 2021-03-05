<?php

namespace PicturePark\API\Exception;

class ShareUpdateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}