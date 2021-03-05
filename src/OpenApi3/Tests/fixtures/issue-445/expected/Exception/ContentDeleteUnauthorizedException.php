<?php

namespace PicturePark\API\Exception;

class ContentDeleteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}