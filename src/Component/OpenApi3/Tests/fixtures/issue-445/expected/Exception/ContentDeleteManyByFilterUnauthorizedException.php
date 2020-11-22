<?php

namespace PicturePark\API\Exception;

class ContentDeleteManyByFilterUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}