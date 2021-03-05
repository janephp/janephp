<?php

namespace PicturePark\API\Exception;

class ContentSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}