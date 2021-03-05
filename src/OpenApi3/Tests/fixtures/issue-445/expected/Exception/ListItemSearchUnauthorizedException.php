<?php

namespace PicturePark\API\Exception;

class ListItemSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}