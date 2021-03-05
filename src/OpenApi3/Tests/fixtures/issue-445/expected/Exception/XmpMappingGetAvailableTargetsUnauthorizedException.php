<?php

namespace PicturePark\API\Exception;

class XmpMappingGetAvailableTargetsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}