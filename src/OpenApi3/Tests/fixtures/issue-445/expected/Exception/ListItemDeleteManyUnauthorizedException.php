<?php

namespace PicturePark\API\Exception;

class ListItemDeleteManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}