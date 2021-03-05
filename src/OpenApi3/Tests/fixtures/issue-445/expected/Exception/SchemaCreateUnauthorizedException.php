<?php

namespace PicturePark\API\Exception;

class SchemaCreateUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}