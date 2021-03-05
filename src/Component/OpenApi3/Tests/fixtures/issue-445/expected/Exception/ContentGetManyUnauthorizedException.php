<?php

namespace PicturePark\API\Exception;

class ContentGetManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}