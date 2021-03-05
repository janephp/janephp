<?php

namespace PicturePark\API\Exception;

class ShareGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}