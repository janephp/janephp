<?php

namespace PicturePark\API\Exception;

class SchemaCreateManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}