<?php

namespace PicturePark\API\Exception;

class ContentDeleteManyByFilterUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}