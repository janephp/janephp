<?php

namespace PicturePark\API\Exception;

class XmpMappingSearchUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}