<?php

namespace PicturePark\API\Exception;

class SchemaGetReferencedUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}