<?php

namespace PicturePark\API\Exception;

class ListItemDeleteManyByFilterUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}