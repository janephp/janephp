<?php

namespace PicturePark\API\Exception;

class SchemaUpdateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}