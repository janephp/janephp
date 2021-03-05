<?php

namespace PicturePark\API\Exception;

class ContentGetOutputsManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}