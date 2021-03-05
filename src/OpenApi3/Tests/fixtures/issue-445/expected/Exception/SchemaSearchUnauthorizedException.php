<?php

namespace PicturePark\API\Exception;

class SchemaSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}