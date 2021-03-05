<?php

namespace PicturePark\API\Exception;

class ContentGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}