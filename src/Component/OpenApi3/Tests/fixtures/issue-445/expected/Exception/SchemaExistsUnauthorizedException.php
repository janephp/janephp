<?php

namespace PicturePark\API\Exception;

class SchemaExistsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}