<?php

namespace PicturePark\API\Exception;

class ListItemGetManyTooManyRequestsException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Too many requests', 429);
    }
}