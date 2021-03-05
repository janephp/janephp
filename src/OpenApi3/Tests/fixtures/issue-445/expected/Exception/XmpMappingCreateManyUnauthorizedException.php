<?php

namespace PicturePark\API\Exception;

class XmpMappingCreateManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}