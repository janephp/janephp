<?php

namespace PicturePark\API\Exception;

class ListItemRestoreManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}