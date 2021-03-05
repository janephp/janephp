<?php

namespace PicturePark\API\Exception;

class ContentDeleteManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}