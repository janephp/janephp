<?php

namespace PicturePark\API\Exception;

class SchemaDeleteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}