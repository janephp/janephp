<?php

namespace PicturePark\API\Exception;

class XmpMappingGetManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}