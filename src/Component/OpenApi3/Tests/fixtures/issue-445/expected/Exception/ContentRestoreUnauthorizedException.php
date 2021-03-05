<?php

namespace PicturePark\API\Exception;

class ContentRestoreUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}