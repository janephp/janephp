<?php

namespace PicturePark\API\Exception;

class XmpMappingGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}