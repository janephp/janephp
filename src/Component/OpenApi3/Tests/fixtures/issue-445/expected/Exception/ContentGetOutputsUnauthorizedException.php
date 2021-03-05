<?php

namespace PicturePark\API\Exception;

class ContentGetOutputsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}