<?php

namespace PicturePark\API\Exception;

class ContentUpdateFileUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}