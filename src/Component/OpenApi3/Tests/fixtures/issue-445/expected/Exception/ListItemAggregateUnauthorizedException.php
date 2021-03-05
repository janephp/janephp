<?php

namespace PicturePark\API\Exception;

class ListItemAggregateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}