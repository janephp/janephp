<?php

namespace PicturePark\API\Exception;

class SchemaFieldExistsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}