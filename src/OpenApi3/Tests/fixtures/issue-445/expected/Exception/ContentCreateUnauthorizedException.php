<?php

namespace PicturePark\API\Exception;

class ContentCreateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}