<?php

namespace PicturePark\API\Exception;

class ListItemDeleteUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}