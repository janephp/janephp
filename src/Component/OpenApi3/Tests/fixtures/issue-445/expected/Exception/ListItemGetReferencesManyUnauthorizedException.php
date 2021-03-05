<?php

namespace PicturePark\API\Exception;

class ListItemGetReferencesManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}