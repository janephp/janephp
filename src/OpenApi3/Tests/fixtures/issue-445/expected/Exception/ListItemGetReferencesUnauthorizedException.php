<?php

namespace PicturePark\API\Exception;

class ListItemGetReferencesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}