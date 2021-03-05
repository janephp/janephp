<?php

namespace PicturePark\API\Exception;

class ContentRestoreManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}