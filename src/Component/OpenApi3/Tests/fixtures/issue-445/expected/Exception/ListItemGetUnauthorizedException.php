<?php

namespace PicturePark\API\Exception;

class ListItemGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}