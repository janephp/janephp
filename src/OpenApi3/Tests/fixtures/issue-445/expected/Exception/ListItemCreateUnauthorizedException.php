<?php

namespace PicturePark\API\Exception;

class ListItemCreateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}