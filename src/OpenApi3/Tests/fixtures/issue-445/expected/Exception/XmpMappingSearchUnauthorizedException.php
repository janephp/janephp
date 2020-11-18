<?php

namespace PicturePark\API\Exception;

class XmpMappingSearchUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}