<?php

namespace PicturePark\API\Exception;

class JsonSchemaGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}