<?php

namespace PicturePark\API\Exception;

class SchemaSearchUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}