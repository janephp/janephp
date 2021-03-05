<?php

namespace PicturePark\API\Exception;

class SchemaGetReferencedUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}