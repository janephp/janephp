<?php

namespace PicturePark\API\Exception;

class ListItemGetManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}